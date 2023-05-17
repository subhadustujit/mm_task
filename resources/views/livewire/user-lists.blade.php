<div class="container">
    <div class="card mt-4 mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-4">
                        <input type="text" wire:model.lazy="search" class="form-control mr-sm-2" placeholder="Search for user">
                    </div>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date Of Birth</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($customers) > 0)
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>
                                        {{$customer->name}}
                                    </td>
                                    <td>
                                        {{$customer->date_of_birth}}
                                    </td>
                                    <td>
                                        {{$customer->email}}
                                    </td>
                                    <td>
                                        {{$customer->phone}}
                                    </td>
                                    <td>
                                        {{$customer->address}}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" align="center">
                                    No User Found.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                {{$customers->links()}}
            </div>
        </div>
    </div>
</div>
