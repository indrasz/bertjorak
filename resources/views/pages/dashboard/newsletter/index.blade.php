@extends('layouts.app')

@section('title', ' Newsletter')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Subscribers Email
                    </h2>
                </div>
                <div class="col-span-4 lg:text-right">
                    <div class="relative mt-0 md:mt-6">
                        <button class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button" id="exportButton">
                            + Export data
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                        <table id="newsletterSubscribersTable" class="w-full" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">Id</th>
                                    <th class="py-4" scope="">Email</th>
                                    <th class="py-4" scope="">Subscribed on</th>
                                    <th class="py-4" scope="">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($newsletter_subscribers as $subscriber)
                                    <tr class="text-gray-700">
                                        <td class="px-1 py-5 text-sm">
                                            {{ $subscriber['id'] }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $subscriber['email'] }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $subscriber['created_at'] }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            <form action="{{ route('dashboard.newsletter.destroy', $subscriber['id']) }}"
                                                method="POST" style="display: flex; justify-content: center; width:50px;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="bx bxs-trash show-alert-delete-box" type="button"
                                                    data-name="{{ $subscriber['id'] }}" style="font-size: 24px;">
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    {{-- shows alert popup when deleting data--}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('.show-alert-delete-box').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: "Are you sure you want to delete this record?",
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    type: "warning",
                    buttons: ["Cancel", "Yes!"],
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        });
    </script>
    {{-- make the table as data table--}}
    <script>
        $(document).ready(function() {
            $('#newsletterSubscribersTable').DataTable();
        });
    </script>

    {{-- export to excel--}}
    <script>
        $(document).ready(function() {
            // Handle export button click event
            $('#exportButton').click(function() {
                // Export the table using Laravel Excel
                exportToExcel();
            });
    
            // Function to export the table data to Excel
            function exportToExcel() {
                // Fetch the table data
                var tableData = [];
                $('#newsletterSubscribersTable tbody tr').each(function() {
                    var rowData = [];
                    $(this).find('td').each(function() {
                        rowData.push($(this).text());
                    });
                    tableData.push(rowData);
                });
    
                // Create a form and append the table data as input fields
                var form = $('<form>').attr('method', 'POST').attr('action', '{{ route('dashboard.newsletter.export') }}');
                form.append('@csrf');
                form.append($('<input>').attr('type', 'hidden').attr('name', 'data').val(JSON.stringify(tableData)));
    
                // Submit the form to trigger the download
                form.appendTo('body').submit().remove();
            }
        });
    </script>


    {{-- <div class="flex h-screen">
        <div class="m-auto text-center">
            <img src="{{ asset('/assets/images/empty-illustration.svg') }}" alt="" class="w-48 mx-auto">
            <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                There is No Requests Yet
            </h2>
            <p class="text-sm text-gray-400">
                It seems that you haven’t provided any service. <br>
                Let’s create your first service!
            </p>

            <div class="relative mt-0 md:mt-6">
                <a href="#" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                    + Add Services
                </a>
            </div>
        </div>
    </div> --}}

@endsection
