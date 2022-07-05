@extends('layouts.master')

@section('title') @lang('translation.Data_Tables') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Tables @endslot
        @slot('title')  @endslot
    @endcomponent
    <?php 
   Use App\Http\Controllers\HomeController;
   use App\Models\Syndicat;
  
  
   $im = DB::table('da')->get()->last() ;
   
 

   ?>
    
    <form action="{{ url('insert-demande') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formrow-numero-input" class="form-label">Numero Demande</label>
                            <input type="text" class="form-control" id="formrow-f-input" name='numerodemande' value=<?php echo $im->numerodemande; ?> readonly='true'>
                        </div>

                        <div class="mb-3">
                            <label for="formrow-designation-input" class="form-label">designation</label>
                            <input type="text" class="form-control" id="formrow-fi-input" name='designation'>
                        </div>
                        <div class="mb-3">
                            <label for="formrow-reference-input" class="form-label">Reference</label>
                            <input type="text" class="form-control" id="formrow-fir-input" name='reference'>
                        </div>

                        <div class="mb-3">
                            <label for="formrow-quantite-input" class="form-label">Quantité</label>
                            <input type="number" class="form-control" id="formrow-firs-input" name='quantite'>
                        </div>
                        <div class="mb-3">
                            <label for="formrow-delai-input" class="form-label">Délai Souhaité</label>
                            <input type="date" class="form-control" id="formrow-firs-input" name='delai'>
                        </div>
                        <div class="row">

                            <div >
                                <div class="mb-3">
                                    <label for="formrow-code-input" class="form-label">Code Centre de cout</label>
                                    <input type="number" class="form-control" id="formrow-email-input" name='cccout'>
                                </div>
                                <div class="mb-3">
                                    <label for="formrow-code-input" class="form-label">Code Nature écono</label>
                                    <input type="number" class="form-control" id="formrow-email-input" name='cnecono'>
                                </div>
                            </div>
                           
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">acheteur</label>
                                    <select id="formrow-inputState" class="form-select" name='acheteur'>
                                        <option selected>Choose...</option>
                                        
                                                <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>

                        
                        </div>

                        <div class="mb-3">

                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md" >Valider</button>
                        </div>
                    </form>
@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
