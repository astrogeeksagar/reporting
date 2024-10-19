@extends('frontend.layouts.main')
@section('main-container')


<div id="example-table"></div>

<script>
    $(document).ready(function() {

        let table; 
        let tableData = [];
        let tableColumns = [];
        let datacount = 100;
        let csrfToken = "{{ csrf_token() }}";
        const postdata = {
            count: datacount
        };

        const options = {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify(postdata)
        };

        fetch('/fetchemployee', options)
            .then(response => response.json())
            .then(data => {
                console.log("Fetched data:", data); 

                if (data.length > 0) {
                    // Define columns
                    tableColumns = [{
                            title: "ID",
                            field: "id",
                            minWidth: 50,
                            headerWordWrap: true
                        },
                        {
                            title: "Name",
                            field: "name",
                            minWidth: 50,
                            headerWordWrap: true
                        },
                        {
                            title: "Age",
                            field: "age",
                            minWidth: 50,
                            headerWordWrap: true
                        },
                        {
                            title: "City",
                            field: "city",
                            minWidth: 50,
                            headerWordWrap: true
                        },
                        {
                            title: "Job",
                            field: "job",
                            minWidth: 50,
                            headerWordWrap: true
                        },
                        {
                            title: "Salary",
                            field: "salary",
                            minWidth: 50,
                            headerWordWrap: true
                        },
                        {
                            title: "DOB",
                            field: "dob",
                            minWidth: 50,
                            headerWordWrap: true
                        }
                    ];

                    // Process data and add to tableData
                    data.forEach((element) => {
                        tableData.push({
                            id: element.id,
                            name: element.name,
                            age: element.age,
                            city: element.city,
                            job: element.post,
                            salary: element.salary,
                            dob: dmy(element.dob)
                        });
                    });

                    // Initialize Tabulator with data and columns
                    table = new Tabulator("#example-table", {
                        data: tableData, // Set fetched data
                        columns: tableColumns, // Set column definitions
                        movableRows: true,
                        groupBy: "age",
                        layout: "fitColumns",
                        pagination: "local",
                        paginationSize: 10,
                        paginationSizeSelector: [5, 10, 15, 20, 30, 40, 50],
                        movableColumns: true,
                        paginationCounter: "rows",
                        printHeader: "<div style='text-align: center;'><h1>Employee Data</h1></div>", 
                        printFooter: "<div style='text-align: center;'><h4>&copy; ZvertexIt</h4></div>", 
                    });
                }
            })
            .catch(error => {
                console.log("Error fetching data:", error);
            });
    });    
        </Script>


</html>


@endsection