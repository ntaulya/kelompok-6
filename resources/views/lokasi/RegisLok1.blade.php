@extends('layouts.main')
@section('title','Pusat Kegiatan Belajar Masyarakat At-Taufiq')
@section('container')

  {{-- Begin of Lokasi --}}
  <div class="container">

    {{-- Begin OF Data Diri Peserta PKBM --}}
    <div style="margin-bottom:0%">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/lokasi">Peta Lokasi PKBM</a></li>
          <li class="breadcrumb-item"><a href="/taufiq">PKBM AT-Taufiq</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Diri</li>
        </ol>
    </div>

        <div class="card border border-primary mb-5" style="width: 100%;">
            <div class="card-body mb-5">
                <h5 class="card-title text-center text-primary mb-5 pb-2">DATA DIRI PESERTA UJIAN ONSITE PKBM AT-TAUFIQ</h5>
           
                <div class="container" style="width: 100%">

                    <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-xl-10">
                            <input type="email" size="50px" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-xl-10">
                            <input type="password" class="form-control" id="inputPassword3">
                          </div>
                        </div>
                        <fieldset class="form-group row">
                          <legend class="col-form-label col-sm-2 float-sm-left pt-0">Radios</legend>
                          <div class="col-xl-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                              <label class="form-check-label" for="gridRadios1">
                                First radio
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                              <label class="form-check-label" for="gridRadios2">
                                Second radio
                              </label>
                            </div>
                            <div class="form-check disabled">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                              <label class="form-check-label" for="gridRadios3">
                                Third disabled radio
                              </label>
                            </div>
                          </div>
                        </fieldset>
                        <div class="form-group row">
                          <div class="col-xl-10 offset-xl-2">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck1">
                              <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-xl-10">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                          </div>
                        </div>
                      </form>
                
                
                </div>

            </div>
        </div>
    {{-- END OF PETA LOKASI --}}

  </div>


@endsection