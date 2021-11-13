@extends('admin.master')

@section('mainContent')

<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Бүтээгдэхүүний жагсаалт</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Эхлэл</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Барааны</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Ангилал</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<ul class="nav nav-pills mb-3">
							<li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">Листээр</a></li>
						
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Бүх ангилал </h4>
									
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example3" class="display" style="min-width: 845px">
												<thead>
													<tr>
													<th>Дугаар</th>
														<th>Нэр</th>
												
													
													
														<th>Үйлдэл</th>
													</tr>
												</thead>
												<tbody>
												<?php
                                    
                                    $i=0;

                                   ?>
												@foreach($genc as $datas)
													<tr>
														<td>{{++$i}}</td>
													
														<td>{{$datas->title}}</td>
												
												
														
													
														
													
														<td>
													
															<a href="{{url('/product/delete/'.$datas->id)}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
															<a href="{{url('/product/edit/'.$datas->id)}}" class="btn btn-sm btn-success"><i class="la la-comment"></i></a>
														</td>												
													</tr>
													
                                                   @endforeach
												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>
						
						</div>
					</div>
				</div>
				
            </div>
        </div>

        @endsection
