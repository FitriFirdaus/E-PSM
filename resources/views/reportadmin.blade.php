<?php

$count = 1;
$semakan = session()->get('semakan_admin');
//$bajet = session()->get('butiran_bajet');


?>

<x-header-admin/>


 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-dark">Report</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Report</li>
              <!-- <li class="breadcrumb-item active">Starter Page filteredtable</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content-header">
        <div class="container-fluid">

<!-- Table -->

<table id="mytable" class="table table-striped table-bordered table-hover table-responsive-lg mytable display responsive nowrap" style="text-align: center;">
    <thead class="table-primary">
        <tr class="class1">
            <td>Nama Aktiviti</td>
            <td>Pemohon</td>
            <td>Tarikh Permohonan</td>
            <td>Jenis</td>
            <td>Keputusan JTPAP</td>
            <td>Semak</td>
            <td>Report</td>
        </tr>
    </thead>
    <tbody>
         @if(count($semakan) != 0)
                                @foreach($semakan as $semakan)
                                <tr>
                                    <td>{{$semakan->activity_name}}</td> 
                                    <td >{{$semakan->created_by}}</td>
                                    <td>{{$semakan->created_at}}</td>

									@php
										$nilaibajet="tiada";
									@endphp
                                      

                                    


                                    <td>
                                      @if($semakan->community_focus!='14-Tidak Berkenanaan' ||$semakan->target_alumni!='1D-Tidak berkenaan'||$semakan->target_industry!='2F-Tidak berkenaan')
                                        @if($semakan->community_focus!='14-Tidak Berkenanaan')
                                        {{'Komuniti,'}}
                                        @endif
                                        @if($semakan->target_alumni!='1D-Tidak berkenaan')
                                        {{'Alumni,'}}
                                        @endif
                                        @if($semakan->target_industry!='2F-Tidak berkenaan')
                                        {{'Industri'}}
                                        @endif
                                      @else
                                      {{'tidak berkenaan'}}
                                      @endif
                                    </td>    
									 

                                    {{-- <td>{{$semakan->form_status}}</td>     --}}

                                    @if($semakan->form_status == 'Lulus')
                                        <td class="text-success font-weight-bold">{{$semakan->form_status}}</td>
                                    @elseif($semakan->form_status == 'Ditolak')
                                        <td class="text-danger font-weight-bold">{{$semakan->form_status}}</td>
								                  	@elseif($semakan->form_status == 'Diluluskan Dengan Syarat')
                                        <td class="text-success font-weight-bold">{{$semakan->form_status}}</td>
								                  	@elseif($semakan->form_status == 'Diluluskan Tanpa Pembiayaan')
                                        <td class="text-success font-weight-bold">{{$semakan->form_status}}</td>
                                    @else
                                        <td class="text-purple font-weight-bold">{{$semakan->form_status}}</td>
                                    @endif 

                                


                                        <td>
                                      
                                          <a class="btn btn-purple" href="view/{{$semakan->app_id}} " target="_blank">
                                            <i class="fas fa-user-edit"></i>
                                          </a>
                                        </td> 
                                      <td>
                                      
                                        <a class="btn btn-danger" href="report/{{$semakan->app_id}} " target="_blank">
                                          <i class="fas fa-file-pdf"></i>
                                        </a>
                                      </td>
                                   
                                      
                                    
                                                                    
                                </tr>

                                @php
                                    $count++;
                                @endphp

                                @endforeach
                                
                            @else
                                <tr style="text-align: center;">
                                  <td colspan="7">Tiada Rekod Ditemui</td>
                                </tr>
                            @endif
    </tbody>
</table>
        </div>
    </div>
</div>
<x-footer-admin/>
