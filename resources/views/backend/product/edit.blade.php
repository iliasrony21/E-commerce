@extends('backend.includes.master')
@section('backend')
<div class="row">
  <div class="col-xl-7 mx-auto mt-5">
        <h6 class="mb-0 text-uppercase text-info">Add new Product Form</h6>
        <hr/>
        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">Product Added form</h5>
                    </div>
                    <hr/>
                <form action="{{ route('updateproduct',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                           <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label"> Product Name</label>
                                <div class="col-sm-9">
                                    <input name="name" value="{{ $product->name }}" type="text" class="form-control" id="name" placeholder="Enter Product Name">
                               @error('name')
                               <span class="text-danger">{{ $message }}</span>
                               @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="category_name" class="col-sm-3 col-form-label"> Category Name</label>
                                 <div class="col-sm-9">
                                    <input name="category_name" value="{{ $product->category_name }}" type="text"  class="form-control" id="category_name" placeholder="Enter your category name">
                                    @error('category_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="brand_name" class="col-sm-3 col-form-label"> Brand Name</label>
                                <div class="col-sm-9">
                                    <input name="brand_name" value="{{ $product->brand_name }}" type="text"  class="form-control" id="image" placeholder="Enter your brand name">
                                    @error('brand_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
										<label for="description" class="col-sm-3 col-form-label">Description</label>
										<div class="col-sm-9">

											<textarea  name="description" value="{{ $product->description }}" class="form-control" id="description" rows="3" >{{ $product->description }}</textarea>
                                            @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
							</div>
                            <!-- <div class="row mb-3">
								<label for="description" class="form-label">Description</label>
                                <input name="description" type="text"  class="form-control" id="description">
                                <textarea id="description" name="description" class="form-control"></textarea>
							</div> -->
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label"> Product Image</label>
                                <div class="col-sm-9">
                                    <input  name="image" type="file"  class="form-control" id="image">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                            <label  class="col-sm-3 col-form-label"> </label>
                                <div class="col-sm-9">
                                  <button class="btn btn-primary form-control">Update Product</button>
                                </div>
                            </div>
                </form>

                </div>
            </div>
        </div>
    </div>





@endsection

