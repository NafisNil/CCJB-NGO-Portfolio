
                @include('admin.sessionMsg')
                <div class="card-body">



                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook <span style="color:red" >*</span></label>
                 
                  <input type="text" class="form-control" name="facebook" value="{!!old('facebook',@$edit->facebook)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Twitter <span style="color:red" >*</span></label>
                 
                  <input type="text" class="form-control" name="twitter" value="{!!old('twitter',@$edit->twitter)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Pinterest <span style="color:red" >*</span></label>
                 
                  <input type="text" class="form-control" name="pinterest" value="{!!old('pinterest',@$edit->pinterest)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Linkedin <span style="color:red" >*</span></label>
                 
                  <input type="text" class="form-control" name="linkedin" value="{!!old('linkedin',@$edit->linkedin)!!}">
                 
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Instagram <span style="color:red" >*</span></label>
                 
                  <input type="text" class="form-control" name="instagram" value="{!!old('instagram',@$edit->instagram)!!}">
                 
                </div>
       

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              