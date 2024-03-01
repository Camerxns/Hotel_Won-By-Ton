<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-center">
            {{ __('Hotel Managers Waiting For Approval') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped mx-auto">
                        <thead>
                            <tr>
                                <th class="px-6">#</th>
                                <th class="px-6">Name</th>
                                <th class="px-6">Email</th>
                                <th class="px-6">Access Level</th>
                                <th class="px-6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataList as $index => $data)
                                <tr>
                                    <td class="px-6">{{ $index + 1 }}</td>
                                    <td class="px-6">{{ $data->name }}</td>
                                    <td class="px-6">{{ $data->email }}</td>
                                    <td class="px-6">{{ $data->AccessLevel }}</td>
                                    <td class="px-6">
                                        <div style="display: flex">
                                            <form action="{{ route('admin.dashboard.store', $data->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="name" value="{{ $data->name }}">
                                                <input type="hidden" name="email" value="{{ $data->email }}">
                                                <input type="hidden" name="password" value="some_default_password">
                                                <input type="hidden" name="AccessLevel" value="{{ $data->AccessLevel }}">
                                                <button type="submit" class="btn btn-success mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.64" height="17.64" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                                                                
                                            <form action="{{ route('admin.dashboard.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.64" height="17.64" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
