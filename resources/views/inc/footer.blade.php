 <!-- Footer -->
 <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Right Shopping Pvt. Ltd.</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="tiyasha" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Donate Now</h4>
            </div>
            <div class="modal-body">
              <form action="{{url('/donation')}}" method="post">
                @csrf
                <p>Name</p>
                <p><input type="text" name="pname" class="form-control" required /></p>
                <p>Phone Number</p>
                <p><input type="text" name="pnumber" class="form-control" required /></p>
                <p>Amount</p>
                <p><input type="number" name="pamount" class="form-control" required /><p><br>
                <p><input type="submit" value="Submit" class="btn btn-primary" /></p>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>