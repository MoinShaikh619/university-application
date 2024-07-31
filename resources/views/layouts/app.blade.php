<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>University Application</title>
  <!-- DataTables CSS Start Here -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href=" https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 
  
 <!-- DataTables CSS End Here -->
<style>
  /* Example custom CSS to adjust table appearance */
table.dataTable thead th {
    background-color: #f4f4f4;
    color: #333;
}

table.dataTable tbody tr:hover {
    background-color: #f1f1f1;
}
  </style>
</head>
<body>
<main class="main-wrapper">
<!-- ========== Section Start ========== --> 
 @yield('content')
<!-- ========== Section end ========== -->           
</main>
 <!-- jQuery (necessary for DataTables) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- DataTables JS -->
<script src="https://cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>

<script src="https://cdn.datatables.net/2.1.2/js/dataTables.bootstrap5.min.js"></script>

<!-- Numeric Class start here-->

<script type="text/javascript">
    $(document).on('keypress','.numeric',(function (event) {
    var charCode = (event.which) ? event.which : event.keyCode
    if (
         (charCode != 45 || $(this).val().indexOf('-') != -1) &&      // “-” CHECK MINUS, AND ONLY ONE.
         (charCode != 46 || $(this).val().indexOf('.') != -1) &&      // “.” CHECK DOT, AND ONLY ONE.
         (charCode < 48 || charCode > 57))
        return false;
    return true;
}));
</script>
<!-- Numeric Class end here-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#students-table').DataTable();
    });
</script>

</body>
</html>    