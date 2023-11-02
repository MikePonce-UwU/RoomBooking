@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.room.title') }}
        </div>
        <div class="card-body">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.rooms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mx-3">
                    <div class="col-12">
                        <img src="https://placehold.co/400" alt="image1" srcset="https://placehold.co/400"
                            class="img-fluid">
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center mt-1">
                            <div class="col col-sm col-md col-lg">
                                <img src="https://placehold.co/60" alt="image2" srcset="https://placehold.co/60"
                                    class="img-fluid w-full">
                            </div>
                            <div class="col col-sm col-md col-lg">
                                <img src="https://placehold.co/60" alt="image3" srcset="https://placehold.co/60"
                                    class="img-fluid w-full">
                            </div>
                            <div class="col col-sm col-md col-lg">
                                <img src="https://placehold.co/60" alt="image4" srcset="https://placehold.co/60"
                                    class="img-fluid w-full">
                            </div>
                            {{-- <div class="col">
                            <img src="https://placehold.co/40" alt="image5" srcset="https://placehold.co/40" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="https://placehold.co/40" alt="image6" srcset="https://placehold.co/40" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="https://placehold.co/40" alt="image7" srcset="https://placehold.co/40" class="img-fluid">
                        </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mx-3">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.room.fields.id') }}
                                </th>
                                <td>
                                    {{ $room->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.room.fields.name') }}
                                </th>
                                <td>
                                    {{ $room->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.room.fields.capacity') }}
                                </th>
                                <td>
                                    {{ $room->capacity }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.room.fields.description') }}
                                </th>
                                <td>
                                    {{ $room->description }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.room.fields.hourly_rate') }}
                                </th>
                                <td>
                                    {{ $room->hourly_rate }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.rooms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>

    {{-- <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.room.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.rooms.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.room.fields.id') }}
                            </th>
                            <td>
                                {{ $room->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.room.fields.name') }}
                            </th>
                            <td>
                                {{ $room->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.room.fields.capacity') }}
                            </th>
                            <td>
                                {{ $room->capacity }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.room.fields.description') }}
                            </th>
                            <td>
                                {{ $room->description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.room.fields.hourly_rate') }}
                            </th>
                            <td>
                                {{ $room->hourly_rate }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.rooms.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
