<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EOA/LoA Reports</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="header.css">
    <style>
        .accordion-item {
            margin-bottom: 10px;
        }

        .accordion-item .card-header {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .accordion-item .card-header:hover {
            background-color: #0056b3;
        }

        .accordion-item .card-header button {
            width: 100%;
            text-align: left;
            padding: 10px 20px;
            font-weight: bold;
            color: #fff;
            background-color: transparent;
            border: none;
            outline: none;
        }

        .accordion-item .card-body a {
            display: block;
            padding: 10px 20px;
            color: #007bff;
        }

        .accordion-item .card-body a:hover {
        }
        text-decoration: underline;
    </style>
</head>

<body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<?php include 'header.php'; ?>
<div class="custom-main">
<div class="container mt-5">
        <h1 class="text-center mb-4">EOA/LoA Reports</h1>
        <div id="accordion">

            <!-- JavaScript to Generate Accordions -->
            <script>
                const reports = [
                    { year: "2024-2025", filename: "EOAReport2024-2025.pdf", title: "EOA Report 2024-2025" },
                    { year: "2023-2024", filename: "EOA-Report-2023-24.pdf", title: "EOA Report 2023-2024" },
                    { year: "2022-2023", filename: "EOAReport22-23.pdf", title: "EOA Report 2022-2023" },
                    { year: "2021-2022", filename: "EOA_Report21-22(2)(1).pdf", title: "EOA Report 2021-2022" },
                    { year: "2020-2021", filename: "AICTE APRROVAL EOA 2020-21 PDF.pdf", title: "EOA Report 2020-2021" },
                    { year: "2019-2020", filename: "EOA Report 19-20.PDF", title: "EOA Report 2019-2020" },
                    { year: "2018-2019", filename: "EOAReport2018-19.pdf", title: "EOA Report 2018-2019" },
                    { year: "2017-2018", filename: "EOAReport2017-18.pdf", title: "EOA Report 2017-2018" },
                    { year: "2016-2017", filename: "EOAReport2016-17.pdf", title: "EOA Report 2016-2017" },
                    { year: "2015-2016", filename: "EOAReport2015-16.pdf", title: "EOA Report 2015-2016" },
                    { year: "2014-2015", filename: "EOAReport2014-15.pdf", title: "EOA Report 2014-2015" },
                    { year: "2013-2014", filename: "EOAReport2013-14.pdf", title: "EOA Report 2013-2014" },
                    { year: "2012-2013", filename: "2012-13.pdf", title: "EOA Report 2012-2013" },
                    { year: "2011-2012", filename: "2011-12.pdf", title: "EOA Report 2011-2012" },
                    { year: "2010-2011", filename: "2010-11.pdf", title: "EOA Report 2010-2011" },
                    { year: "2008-2010", filename: "2008-10.pdf", title: "EOA Report 2008-2010" },
                    { year: "2006-2007", filename: "2006-07.pdf", title: "EOA Report 2006-2007" },
                    { year: "2005-2006", filename: "2005-06.pdf", title: "EOA Report 2005-2006" },
                    { year: "2004-2005", filename: "2004-5.pdf", title: "EOA Report 2004-2005" },
                    { year: "2003-2004", filename: "2003-4.pdf", title: "EOA Report 2003-2004" },
                    { year: "2002-2003", filename: "2002-3.pdf", title: "EOA Report 2002-2003" },
                    { year: "2001-2002", filename: "2001-02.pdf", title: "EOA Report 2001-2002" }
                ];

                // Generating Bootstrap Accordion Items
                reports.forEach(report => {
        $('#accordion').append(`
            <div class="accordion-item">
                <div class="card">
                    <div class="card-header" id="heading-${report.year}">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-${report.year}">
                                ${report.title}
                            </button>
                        </h5>
                    </div>
                    <div id="collapse-${report.year}" class="collapse" aria-labelledby="heading-${report.year}" data-parent="#accordion">
                        <div class="card-body">
                            <a href="downloads/loaeoa/${report.filename}" target="_blank">Download ${report.title}</a>
                        </div>
                    </div>
                </div>
            </div>`);
    });
            </script>

        </div>
    </div>
    </div>
    <script src="header.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
