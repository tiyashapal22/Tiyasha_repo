<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <title>Right Shopping Pvt. Ltd.</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include("inc/menu")

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include("inc/top")
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Product List</h1>
                    <div class="w3-container">

                      
                        <table class="w3-table-all">
                        <thead>
                          <tr class="w3-light-green">
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total</th>
                            <th>Place Order</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                               <td>{{$d->proname}}</td>
                               <td>{{$d->proprice}}</td>
                               <td>{{$d->proqty}}</td>
                               <td>{{$d->total}}</td>
                               <td><a onclick="return confirm('Are you sure to place order?')" href="{{url('/shipping')}}" class="w3-button w3-green">Place Order</a></td>
                            </tr> 
                            @endforeach
                        </tbody>
                        </table>
                      </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            @include("inc/footer")

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('/admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('/admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>