<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RTI Authorities</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="header.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    .container {
      margin-top: 50px;
    }
    h2 {
      margin-bottom: 30px;
      font-weight: bold;
      color: #343a40;
      font-size: 2.5rem;
    }
    .table-wrapper {
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
      background-color: #fff;
      padding: 20px;
    }
    .table {
      margin-bottom: 0;
    }
    .table th, .table td {
      text-align: center;
      vertical-align: middle;
      padding: 15px;
      border-top: none;
    }
    .table th {
      background-color: #007bff;
      color: #fff;
      font-size: 1rem;
      font-weight: normal;
    }
    .table tbody tr:nth-child(odd) {
      background-color: #f2f2f2;
    }
    .table tbody tr:hover {
      background-color: #e9ecef;
    }
    .table td {
      font-size: 0.9rem;
      color: #495057;
    }
    @media (max-width: 767.98px) {
      .table th, .table td {
        padding: 10px;
        font-size: 0.8rem;
      }
    }
  </style>
</head>
<body>
  <?php include "header.php" ?>
<div class="custom-main">
<div class="container">
  <h2 class="text-center">RTI Authorities</h2>
  <section class="section-table" id="table1-6l">
    <div class="container container-table">
      <div class="table-wrapper">
        <div class="container scroll">
          <table class="table table-borderless table-striped">
            <thead>
              <tr>
                <th>SL.NO</th>
                <th>OFFICE</th>
                <th>STATE PUBLIC INFORMATION OFFICER</th>
                <th>ASSISTANT PUBLIC INFORMATION OFFICER</th>
                <th>CONTACT DETAILS</th>
                <th>APPELLATE AUTHORITY</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Institute of Engineering & Technology</td>
                <td>Assistant Registrar</td>
                <td>Section Officer - A</td>
                <td>0494 - 240 02 23, office@cuiet.info</td>
                <td>Registrar</td>
              </tr>
              <!-- Additional rows can be added here -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="header.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
