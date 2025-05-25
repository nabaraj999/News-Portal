
<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Article Edit</h4>
                            <a href="{{ route('admin.article.index') }}" class="btn btn-primary">go back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.article.update', $article->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">

                                    <div class="col-6 pb-2">
                                        <label for="categories">Select Categories</label>
                                        <select name="categories[]" id="categories" class="form-control select2"
                                            multiple="multiple">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $article->categories->contains($category->id) ? 'selected' : '' }}>
                                                    {{ $category->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-6 pb-2">
                                        <label for="title">Enter Title</label>
                                        <input type="text" name="title" id="title" class="form-control"
                                            value="{{ $article->title }}">
                                    </div>

                                    <div class="col-12 pb-2">
                                        <label for="content">Enter Content</label>
                                        <textarea name="content" id="content" class="form-control summernote">
                                            {{ $article->content }}
                                        </textarea>
                                    </div>

                                    <div class="col-12 pb-2">
                                        <label for="meta_keywords">Enter Meta Keywords</label>
                                        <textarea name="meta_keywords" id="meta_keywords" class="form-control">
                                            {{ $article->meta_keywords }}
                                        </textarea>
                                    </div>

                                    <div class="col-12 pb-2">
                                        <label for="description">Enter Meta Description</label>
                                        <textarea name="description" id="description" class="form-control">
                                            {{ $article->meta_keywords }}
                                        </textarea>
                                    </div>

                                    <div class="col-6 pb-2">
                                        <label for="image">Upload Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        <img src="{{ asset($article->image) }}" height="200" alt="">
                                    </div>

                                    <div class="col-6 pb-2">
                                        <label for="name">Change Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="pending"
                                                {{ $article->status == 'pending' ? 'selected' : '' }}>
                                                Pending</option>
                                            <option value="approved"
                                                {{ $article->status == 'approved' ? 'selected' : '' }}>
                                                Approved</option>
                                            <option value="rejected"
                                                {{ $article->status == 'rejected' ? 'selected' : '' }}>
                                                Rejected</option>
                                        </select>
                                        @error('status')
                                            <p>
                                                <span class="text-danger">{{ $message }}</span>
                                            </p>
                                        @enderror
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
