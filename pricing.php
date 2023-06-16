<!DOCTYPE html>

<html>

<head>
    <link rel="icon" href="images/favicon.png" type="image/png">
    <title>Pricing Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        /* .navbar{
    height: 30%;
} */
        /* .header {
            height: 30%;
        } */
        .navbar {
            position: relative;
            min-height: 128px;
            margin-bottom: 20px;
            border: 1px solid transparent;
        }

        .bg-light {
            background-color: #8AC53F !important;
        }

        .navbar-text {
            color: white;
        }

        .table-hover tbody tr:hover {
            background-color: #8ac53f91;
        }

        .th {
            text-align: center;
        }

        #search-form {
            margin-bottom: 10px;
        }

        #search-input {
            border-radius: 20px;
        }

        .btn-outline-success {
            border-color: #8AC53F;
            color: #8AC53F;
        }

        .btn-outline-success:hover {
            background-color: #8AC53F;
            color: white;
        }

        .btn {
            background-color: white;
        }

        .btn-outline-success {
            border-color: #ffffff;
            color: #28a745;
            border-radius: 17px;
        }

        .table tbody tr {
            height: 50px;
            /* Adjust the height as per your requirement */
        }

        .table td {
            margin-top: 10px;
            /* Adjust the margin-top value as per your requirement */
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th {
            padding: 8px;
            line-height: 2.428571;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#search-form').submit(function(e) {
                e.preventDefault();
                performSearch();
            });

            $('#search-input').keyup(function() {
                performSearch();
            });

            function performSearch() {
                var searchText = $('#search-input').val().toLowerCase();
                $('.table tbody tr').hide();
                $('.table tbody tr').each(function() {
                    var rowData = $(this).text().toLowerCase();
                    if (rowData.indexOf(searchText) !== -1) {
                        $(this).show();
                    }
                });
            }

            $('#search-input').on('input', function() {
                if ($(this).val() === '') {
                    $('.table tbody tr').show();
                }
            });
        });
    </script>
</head>

<body style="background-image: url(images/741232_Illustration05.jpg);">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <!-- <a class="navbar-brand mx-auto" href="#">
                    <img src="images/logo.png" alt="Logo" style="width: 402px; height: auto;">
                </a> -->
                <span class="navbar-text mr-auto text-white h1">Pricing</span>
                <form id="search-form" class="form-inline my-2 my-lg-0">
                    <input id="search-input" class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>


            </div>
        </nav>
    </header>
    <div class="container">
        <div class="table-responsive">
            <table style="text-align: center;" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Code</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">M S P</th>
                        <th scope="col">S P </th>
                        <th scope="col">P P</th>
                        <th scope="col">Column 7</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7" style=" background-color :#3c763d7a; text-align: center;"><b>CONNECT 4.0</b></td>
                    </tr>
                    <tr>
                        <th class="th" scope="row">1</th>
                        <td>C001</td>
                        <td>Connect 10 : Bundled Product
                            for 10 agents (Hardware + Software)
                            with WFH Module. </td>
                        <td>₹81,003</td>
                        <td>₹71,283</td>
                        <td>56,702</td>
                        <td>Row 1 Data 7</td>
                    </tr>

                    <tr>
                        <th class="th" scope="row">2</th>
                        <td>C002</td>
                        <td>Row 3 Data 3</td>
                        <td>Row 3 Data 4</td>
                        <td>Row 3 Data 5</td>
                        <td>Row 3 Data 6</td>
                        <td>Row 3 Data 7</td>
                    </tr>
                    <tr>
                        <th class="th" scope="row">3</th>
                        <td>C003</td>
                        <td>Row 4 Data 3</td>
                        <td>Row 4 Data 4</td>
                        <td>Row 4 Data 5</td>
                        <td>Row 4 Data 6</td>
                        <td>Row 4 Data 7</td>
                    </tr>
                    <tr>
                        <th class="th" scope="row">4</th>
                        <td>C004</td>
                        <td>Row 5 Data 3</td>
                        <td>Row 5 Data 4</td>
                        <td>Row 5 Data 5</td>
                        <td>Row 5 Data 6</td>
                        <td>Row 5 Data 7</td>
                    </tr>
                    <tr>
                        <th class="th" scope="row">5</th>
                        <td>C005</td>
                        <td>Row 6 Data 3</td>
                        <td>Row 6 Data 4</td>
                        <td>Row 6 Data 5</td>
                        <td>Row 6 Data 6</td>
                        <td>Row 6 Data 7</td>
                    </tr>
                    <tr>
                        <th class="th" scope="row">6</th>
                        <td>C006</td>
                        <td>Row 7 Data 3</td>
                        <td>Row 7 Data 4</td>
                        <td>Row 7 Data 5</td>
                        <td>Row 7 Data 6</td>
                        <td>Row 7 Data 7</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add the Bootstrap JS scripts here -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="assets/js/test.js"></script>
</body>

</html>