@extends('frontend.layouts.main')
@section('main-container')
    <div id="example-table"></div>

    <script>
        $(document).ready(function() {
            let tableData = [];
            let tableColumns = '';
            let datacount = 100;
            let csrfToken = "{{ csrf_token() }}";
            const postdata = {
                count: datacount
            };

            const options = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(postdata)
            };

            fetch('/fetchemployee', options)
                .then(response => response.json())
                .then(data => {
                    if (data.length > 0) {
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
                            },
                        ];

                        data.forEach((element, index) => {
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

                        var table = new Tabulator("#example-table", {
                            data: tableData,
                            columns: tableColumns,
                            movableRows: true,
                            layout: "fitColumns",
                            pagination: "local",
                            paginationSize: 10,
                            paginationSizeSelector: [1, 2, 3, 6, 8, 10],
                            movableColumns: true,
                            paginationCounter: "rows",
                            printHeader: "<h1>Employee Data</h1>",
                        });
                    }
                })
                .catch(error => {
                    console.log(error);
                });
        });
    </script>

    </body>

    </html>
@endsection
