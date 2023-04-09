@extends('backend.includes.master')
@section('backend')

<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>SL No</th>
										<th>Product Name</th>
										<th>Category Name</th>
										<th>Brand name</th>
										<th>Product Image</th>
										<th>Description</th>
										<th>Action</th>

									</tr>
								</thead>
								<tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td >{{ $product->id }}</td>
                                        <td >{{ $product->name }}</td>

                                        <td >{{ $product->category_name }}</td>
                                        <td >{{ $product->brand_name }}</td>
                                        <td >
                                            <img height="90" width="100" src="{{ asset('product/'.$product->image) }}" alt="">
                                        </td>
                                        <td >{{ $product->description }}</td>

                                        <td>
                                        <a href="{{ route('editsproduct',$product->id) }}"  class="btn btn-warning my-3" >Edit</a >
                                        <button  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$product->id}}">Delete</button>
                                        </td>
                                    </tr>
                                    <!------------------- delete modal start ---------------------------- -->

    <div class="modal fade" id="delete{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this Item?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> if you sure to delete this product then press yes <br> and if you don't want to delete then press no</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <a  href="{{route('alldelete',$product->id)}}" class="btn btn-primary">Yes</a>
                </div>
            </div>
        </div>
     </div>

                                    @endforeach

								</tbody>
								<tfoot>
									<tr>
                                    <th>SL No</th>
										<th>Product Name</th>
										<th>Category Name</th>
										<th>Brand name</th>
										<th>Product Image</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

@endsection
