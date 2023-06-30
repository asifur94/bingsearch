    


    <div class="tab-pane active" id="siteInfo">

        <form class="form-horizontal" action="{{route('save-site-info')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">


                <div class="col-md-4">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Site Name</label>
                      <input type="text" name="site_name" class="form-control" id="inputName" value="{{ $site_info->site_name ?? '' }}">
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Foundation Name</label>
                      <input type="text" name="foundation_name" class="form-control" id="inputName" value="{{ $site_info->foundation_name ?? '' }}">
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Slogan</label>
                      <input type="text" name="slogan" class="form-control" id="inputName" value="{{ $site_info->slogan ?? '' }}">
                  </div>
                </div>


                <div class="col-md-3">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Contact Number</label>
                      <input type="text" name="contact_number" class="form-control" id="inputName" value="{{ $site_info->contact_number ?? '' }}">
                  </div>
                </div>



                <div class="col-md-3">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Email</label>
                      <input type="text" name="email" class="form-control" id="inputName" value="{{ $site_info->email ?? '' }}">
                  </div>
                </div>



                <div class="col-md-3">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Agent Fee</label>
                      <input type="text" name="agent_fee" class="form-control" id="inputName" value="{{ $site_info->agent_fee ?? '' }}">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Form Fee</label>
                      <input type="text" name="form_fee" class="form-control" id="inputName" value="{{ $site_info->form_fee ?? '' }}">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Profit ( % )</label>
                      <input type="text" name="profit" class="form-control" id="inputName" value="{{ $site_info->profit ?? '' }}">
                  </div>
                </div>


                <div class="col-md-3">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label"> Minimum Withdraw </label>
                      <input type="text" name="min_withdraw" class="form-control" id="inputName" value="{{ $site_info->min_withdraw ?? '' }}">
                  </div>
                </div>

<!--                 <div class="col-md-6">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Refer commission ( TK )</label>
                      <input type="text" name="refer_commission" class="form-control" id="inputName" value="{{ $site_info->refer_commission ?? '' }}">
                  </div>
                </div> -->



                <div class="col-md-12">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Address</label>
                      <input type="text" name="address" class="form-control" id="inputName" value="{{ $site_info->address ?? '' }}">
                  </div>
                </div>

                <hr>

                <div class="col-md-12">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label" style="font-size: 25px;"><u>Social Links</u></label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Facebook</label>
                      <input type="text" name="facebook" class="form-control" id="inputName" value="{{ $site_info->facebook ?? '' }}">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Whatsapp</label>
                      <input type="text" name="whatsapp" class="form-control" id="inputName" value="{{ $site_info->whatsapp ?? '' }}">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Youtube</label>
                      <input type="text" name="youtube" class="form-control" id="inputName" value="{{ $site_info->youtube ?? '' }}">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Insta</label>
                      <input type="text" name="insta" class="form-control" id="inputName" value="{{ $site_info->insta ?? '' }}">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                      <label for="inputName" class="col-form-label">Linkedin</label>
                      <input type="text" name="linkedin" class="form-control" id="inputName" value="{{ $site_info->linkedin ?? '' }}">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                  </div>
                </div>



            </div>



      </form>
    </div>