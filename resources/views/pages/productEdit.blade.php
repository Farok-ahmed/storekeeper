@extends('layout.app')
@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>eCommerce <span>/ Edit Product</span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="buttons-group">
                <button class="button button-outline button-primary">Save &amp; Publish</button>
                <button class="button button-outline button-info">Save to Draft</button>
                <button class="button button-outline button-danger">Delete Product</button>
            </div>
        </div><!-- Page Button Group End -->

    </div><!-- Page Headings End -->

    <!-- Add or Edit Product Start -->
    <div class="add-edit-product-wrap col-12">

        <div class="add-edit-product-form">
            <form action="#">

                <h4 class="title">About Product</h4>

                <div class="row">
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Name / Title*"></div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Sub-title"></div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Price*"></div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Discount"></div>
                    <div class="col-12 mb-30"><textarea class="form-control">Product Description</textarea></div>
                    <div class="col-lg-6 col-12 mb-30">
                        <select class="form-control nice-select" style="display: none;">
                            <option value="status">Status</option>
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select><div class="nice-select form-control" tabindex="0"><span class="current">Status</span><ul class="list"><li data-value="status" class="option selected">Status</li><li data-value="publish" class="option">Publish</li><li data-value="draft" class="option">Draft</li></ul></div>
                    </div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Meta Title"></div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Meta Keyword"></div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Aditional Description Image Link"></div>
                </div>

                <h4 class="title">Product Gallery</h4>

                <div class="product-upload-gallery row flex-wrap">
                    <div class="col-12 mb-30">
                        <p class="form-help-text mt-0">Upload Maximum 800 x 800 px &amp; Max size 2mb.</p>
                        <div class="filepond--root file-pond filepond--hopper" data-style-button-remove-item-position="left" data-style-button-process-item-position="right" data-style-load-indicator-position="right" data-style-progress-indicator-position="right" style="height:140px;"><input class="filepond--browser" type="file" id="filepond--browser-0t5u1e1vy" name="filepond" aria-controls="filepond--assistant-0t5u1e1vy" aria-labelledby="filepond--drop-label-0t5u1e1vy" multiple=""><div class="filepond--drop-label" style="transform:translate3d(0px, 0px, 0) ;opacity:1;"><label for="filepond--browser-0t5u1e1vy" id="filepond--drop-label-0t5u1e1vy" aria-hidden="true">Drag &amp; Drop your files or <span class="filepond--label-action" tabindex="0">Browse</span></label></div><div class="filepond--list-scroller" style="transform:translate3d(0px, 135px, 0) ;"><ul class="filepond--list" role="list"></ul></div><div class="filepond--panel filepond--panel-root" data-scalable="true"><div class="filepond--panel-top filepond--panel-root"></div><div class="filepond--panel-center filepond--panel-root" style="transform:translate3d(0px, 0px, 0) scale3d(1, 1.4, 1) ;"></div><div class="filepond--panel-bottom filepond--panel-root" style="transform:translate3d(0px, 140px, 0) ;"></div></div><span class="filepond--assistant" id="filepond--assistant-0t5u1e1vy" role="status" aria-live="polite" aria-relevant="additions"></span><div class="filepond--drip"></div></div>
                    </div>
                </div>

                <h4 class="title">Additional Information</h4>

                <div class="row">
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 1"></div>
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 2"></div>
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 3"></div>
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 4"></div>
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 5"></div>
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 6"></div>
                </div>

                <!-- Button Group Start -->
                <div class="row">
                    <div class="d-flex flex-wrap justify-content-end col mbn-10">
                        <button class="button button-outline button-primary mb-10 ml-10 mr-0">Save &amp; Publish</button>
                        <button class="button button-outline button-info mb-10 ml-10 mr-0">Save to Draft</button>
                        <button class="button button-outline button-danger mb-10 ml-10 mr-0">Delete Product</button>
                    </div>
                </div><!-- Button Group End -->

            </form>
        </div>

    </div><!-- Add or Edit Product End -->

</div>
@endsection
