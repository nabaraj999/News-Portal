<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Category Create</h4>
                            <a href="{{ route('admin.category.index') }}" class="btn btn-primary">go back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.category.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-6 pb-2">
                                        <label for="name">Enter Category Title</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>

                                    <div class="col-12 pb-2">
                                        <label for="meta_keywords">Enter Meta Keywords</label>
                                        <textarea name="meta_keywords" id="meta_keywords" class="form-control">
                                        </textarea>
                                    </div>

                                    <div class="col-12 pb-2">
                                        <label for="description">Enter Meta Description</label>
                                        <textarea name="description" id="description" class="form-control">
                                        </textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Save Record</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
