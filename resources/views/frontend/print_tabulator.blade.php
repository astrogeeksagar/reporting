@extends('frontend.layouts.main')
@section('main-container')
    <div>

        <button id="print-table">Print Table</button>
        <button id="download-csv">Download CSV</button>
        <button id="download-json">Download JSON</button>
        <button id="download-xlsx">Download XLSX</button>
        <button id="download-pdf">Download PDF</button>
        <button id="download-html">Download HTML</button>

    </div>

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

            // Make sure the table variable is accessible in button click events
            $("#print-table").on("click", function() {
                if (table) {
                    table.print(false, true);
                } else {
                    console.log("Table is not initialized yet.");
                }
            });

            $("#download-csv").on("click", function() {
                if (table) {
                    table.download("csv", "data.csv");
                } else {
                    console.log("Table is not initialized yet.");
                }
            });

            $("#download-json").on("click", function() {
                if (table) {
                    table.download("json", "data.json");
                } else {
                    console.log("Table is not initialized yet.");
                }
            });

            $("#download-xlsx").on("click", function() {
                if (table) {
                    table.download("xlsx", "data.xlsx", {
                        sheetname: "My Data"
                    });
                } else {
                    console.log("Table is not initialized yet.");
                }
            });

            $("#download-pdf").on("click", function() {
                if (table) {
                    table.download("pdf", "data.pdf", {
                        orientation: "portrait",
                        title: "Pdf Report"
                    });
                } else {
                    console.log("Table is not initialized yet.");
                }
            });

            $("#download-html").on("click", function() {
                if (table) {
                    table.download("html", "data.html", {
                        style: true
                    });
                } else {
                    console.log("Table is not initialized yet.");
                }
            });

        });
    </script>

    </body>

    </html>
@endsection
