@extends('frontend.layouts.main')
@section('main-container')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabulator Example</title>
        <link href="https://unpkg.com/tabulator-tables@6.3.0/dist/css/tabulator.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.20/jspdf.plugin.autotable.min.js"></script>
        <script src="https://unpkg.com/tabulator-tables@6.3.0/dist/js/tabulator.min.js"></script>
    </head>

    <body>
        <div id="example-table"></div>

        <script>
            var tableData = [{
                    id: 1,
                    name: "John Doe",
                    age: 29,
                    gender: "Male",
                    job: "Engineer",
                    salary: 55000.685,
                    attendance: "95%"
                },
                {
                    id: 2,
                    name: "Jane Smith",
                    age: 34,
                    gender: "Female",
                    job: "Manager",
                    salary: 78000.685,
                    attendance: "92%"
                },
                {
                    id: 3,
                    name: "Paul Allen",
                    age: 28,
                    gender: "Male",
                    job: "Developer",
                    salary: 65000.585,
                    attendance: "98%"
                },
            ];

            // Define table columns
            var tableColumns = [{
                    title: "ID",
                    field: "id",
                    minWidth: 50,
                    headerWordWrap: true
                },
                {
                    title: "Full Name",
                    field: "name",
                    minWidth: 150,
                    headerWordWrap: true
                },
                {
                    title: "Age",
                    field: "age",
                    hozAlign: "center",
                    minWidth: 80,
                    headerWordWrap: true
                },
                {
                    title: "Gender",
                    field: "gender",
                    minWidth: 100,
                    headerWordWrap: true
                },
                {
                    title: "Job Title",
                    field: "job",
                    minWidth: 120,
                    headerWordWrap: true
                },
                {
                    title: "Annual Salary",
                    field: "salary",
                    bottomCalc: "avg",

                    bottomCalcParams: {
                        precision: 3
                    },
                    formatter: "money",
                    hozAlign: "right",
                    minWidth: 120,
                    headerWordWrap: true
                },
                {
                    title: "Attendance Percentage",
                    field: "attendance",
                    minWidth: 150,
                    headerWordWrap: true
                },
            ];


            var table = new Tabulator("#example-table", {
                data: tableData,
                columns: tableColumns,
                movableRows: true,
                groupBy: "gender",
                layout: "fitColumns",
                pagination: "local",
                paginationSize: 7,
                printHeader: "<h1>Employee Data</h1>",
            });
        </script>

    </body>

    </html>
@endsection
