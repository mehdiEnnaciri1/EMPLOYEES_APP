@extends('adminlte::page')

@section('plugins.datatables',true)


@section('title')
    List des communes
@endsection

@section('content-header')
    <h2>List des communes</h2>
@endsection

@section('content')
@if(auth()->user()->hasRole('admin'))
    <div class="contrainer">
        <div class="row">
            <div class="col-md-30 mx-auto">
                <div class="card-my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase">
                             <h4>LISTE DES COMMUNES</h4>
                        </div>
                        <div class="card-body">
                        <table id="mytable" class="table table-bordred font-weight-bold table-stripped">
                            <thead>
                                <tr>
                                    <th>les noms des communes</th>
                                    <th>localisation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <tr>
                                        <td>Ain-sbaa</td>
                                        <td class="d-flex justify-content-center aligh-items-center">
                                            <a href="https://www.google.com/maps/place/Commune+urbaine+Ain+seb%C3%A2a/@33.6012438,-7.5676565,14z/data=!4m10!1m2!2m1!1scommune+ain+sebaa+casablanca!3m6!1s0xda7cc84c9b406b1:0xbf421127fe5296ab!8m2!3d33.6012438!4d-7.5316076!15sChxjb21tdW5lIGFpbiBzZWJhYSBjYXNhYmxhbmNhkgEWY2l0eV9nb3Zlcm5tZW50X29mZmljZeABAA!16s%2Fg%2F11fyly8jz9?hl=fr&entry=ttu"
                                             class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hay mohammadi</td>
                                        <td class="d-flex justify-content-center aligh-items-center">
                                            <a href="https://www.google.com/maps/place/%D9%85%D9%82%D8%A7%D8%B7%D8%B9%D8%A9+%D8%A7%D9%84%D8%AD%D9%8A+%D8%A7%D9%84%D9%85%D8%AD%D9%85%D8%AF%D9%8A%E2%80%AD/@33.5913276,-7.7146244,12z/data=!4m10!1m2!2m1!1scommune+hay+mohamadi+casablanca!3m6!1s0xda7cd1e8ced4843:0x8be807d83ab466f7!8m2!3d33.5913276!4d-7.5704288!15sCh9jb21tdW5lIGhheSBtb2hhbWFkaSBjYXNhYmxhbmNhkgEQY29ycG9yYXRlX29mZmljZeABAA!16s%2Fg%2F11c1pljk4k?hl=fr&entry=ttu"
                                             class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Roches-noires</td>
                                        <td class="d-flex justify-content-center aligh-items-center">
                                            <a href="https://www.google.com/maps/place/Commune+urbaine+Roche+noire/@33.5918721,-7.595887,3a,75y,90t/data=!3m8!1e2!3m6!1sAF1QipMiL3P42Z0wIgu6bUnzDsUpnupzZCne2DNDHHTE!2e10!3e12!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMiL3P42Z0wIgu6bUnzDsUpnupzZCne2DNDHHTE%3Dw176-h86-k-no!7i4608!8i2240!4m7!3m6!1s0xda7cd6eb0170379:0x48e6e85f68361656!8m2!3d33.5918721!4d-7.595887!10e5!16s%2Fg%2F11fy2lqwb9?hl=fr&entry=ttu"
                                             class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
