@extends('layout.main')

@section('content')
    <h1>Form New Add Data Students</h1>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('students') }}'">
                Back
            </button>
        </div>
        <div class="card-body">
            <form action="{{ url('students') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="txtid" class="col-sm-2 col-form-label">ID Students</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('txtid') is-invalid @enderror" id="txtid" name="txtid" value="{{ old('txtid') }}">
                      @error('txtid')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtfullname" class="col-sm-2 col-form-label">Fullname</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('txtfullname') is-invalid @enderror" id="txtfullname" name="txtfullname" value="{{ old('txtfullname') }}">
                      @error('txtfullname')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                      <select name="txtgender" id="txtgender" class="form-select form-select-sm @error('txtgender') is-invalid @enderror">
                        <option value="" selected>-- Choose --</option>
                        <option value="M" {{ (old('txtgender')== 'M') ? 'selected' : '' }}>Male</option>
                        <option value="F" {{ (old('txtgender')== 'F') ? 'selected' : '' }}>Female</option>
                      </select>
                      @error('txtgender')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <textarea class="form-control @error('txtaddress') is-invalid @enderror" name="txtaddress" id="txtaddress" cols="30" rows="10" value="{{ old('txtaddress') }}"></textarea>
                        @error('txtaddress')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtphone" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('txtphone') is-invalid @enderror" id="txtphone" name="txtphone" value="{{ old('txtphone') }}">
                      @error('txtphone')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-sm btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection