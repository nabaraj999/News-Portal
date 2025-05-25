<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Company Details</h4>
                            @if (!$company)
                                <a href="{{ route('admin.company.create') }}" class="btn btn-primary">add new</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Company Name</th>
                                            <th>Logo</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($company)
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    {{ $company->name }}
                                                </td>
                                                <td>
                                                    <img alt="image" src="{{ asset($company->logo) }}"
                                                        width="35">
                                                </td>
                                                <td>
                                                    {{ $company->email }}
                                                </td>
                                                <td>
                                                    {{ $company->phone }}
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.company.destroy', $company->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="{{ route('admin.company.edit', $company->id) }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
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
