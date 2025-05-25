
<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Categories</h4>
                            <a href="{{ route('admin.category.create') }}" class="btn btn-primary">add new</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                               index
                                            </th>
                                            <th>Title</th>
                                            <th>SLug</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $index => $category)
                                            <tr>
                                                <td>
                                                    {{ ++$index }}
                                                </td>
                                                <td>
                                                    {{ $category->title }}
                                                </td>
                                                <td>
                                                    {{ $category->slug }}
                                                </td>
                                                <td>
                                                    @if ($category->status == 1)
                                                        <span class="badge bg-success text-white">Active</span>
                                                    @else
                                                        <span class="badge bg-danger text-white">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.category.destroy', $category->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="{{ route('admin.category.edit', $category->id) }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
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
    </section>
</x-app-layout>
