$("document").ready(function () {
 $("#add").click(function (e) {
  e.preventDefault();
  $("#tbl").append(`
         <section>
         <div id="tbl">
          <div class="row" id="">
            <div class="col-md-3">
              <div class="form-group">
                <label for="">name</label>
                <input type="text" class="form-control" name="" id="">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">relationship</label>

                <input type="text" class="form-control" name="" id="">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">occupation</label>
                <input type="text" class="form-control" name="" id="">
              </div>
            </div>
            <div class="col-md-3">
              <button class="btn btn-danger btn-block mt-4 del" id="add">
              <i class="fa fa-trash fs-5 " ></i>
              </button>

            </div>
          </div>

        </div>
             </section>
             `);
 });
 $(document).on("click", ".del", function () {
  $(this).closest("section").remove();
 });
});
