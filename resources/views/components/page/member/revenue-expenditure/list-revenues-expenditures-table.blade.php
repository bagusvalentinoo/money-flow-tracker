@props([
    'items' => [],
])

<div class="table-responsive">
    <table class="table table-borderless mb-0">
        <thead>
            <tr class="text-center">
                <th>
                    <x-base.checkbox.checkbox :checked=false />
                </th>
                <th>Title</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Created At</th>
                <th>Transaction Receipt</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>
                        <x-base.checkbox.checkbox :checked=false />
                    </td>
                    <td>{{ $revenue->title }}</td>
                    <td>{{ $revenue->description }}</td>
                    <td>{{ $revenue->amount }}</td>
                    <td>{{ $revenue->created_at }}</td>
                    <td>{{ $revenue->transaction_evidence }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <div class="mx-1">
                                <x-base.button.button type="button" className="btn-outline-secondary icon icon-left"
                                    text="Detail" iconTagI="bi bi-eye" />
                            </div>
                            <div class="mx-1">
                                <x-base.button.button type="button" className="btn-primary icon icon-left"
                                    text="Edit" iconTagI="bi bi-pencil-square" />
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td>
                    <x-base.checkbox.checkbox :checked=false />
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="d-flex justify-content-center">
                        <div class="w-50 border border-dark py-2 px-1 text-center">
                            <span>Not Avalaible</span>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        <div class="mx-1">
                            <x-base.button.button type="button"
                                className="btn-outline-dark icon icon-left px-3 text-center" text="Detail"
                                iconTagI="bi bi-eye" :iconMargin=true />
                        </div>
                        <div class="mx-1">
                            <x-base.button.button type="button" className="btn-primary icon icon-left px-3 text-center"
                                text="Edit" iconTagI="bi bi-pencil-square" :iconMargin=true />
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
