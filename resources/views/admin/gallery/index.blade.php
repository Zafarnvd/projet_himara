@extends('admin.layouts.index')
@section('admin')
    <!-- component -->
    <div class=" flex items-center justify-center bg-amber-50 m-auto w-full">


        <div id="test" class="grid grid-cols-6 gap-x-4 gap-y-1 max-w-2xl w-screen">

            <!-- Title -->
            <div class="col-span-full mb-3">
                <p class="text-3xl text-gray-600 font-mono font-extrabold text-center"> Gallery </p>
                <a href="{{ route('admin.gallery.create') }}" class=" relative bg-blue-500 text-white p-2 rounded text-2xl font-bold">Ajouter Image<a href=" route('admin.gallery.create')  }}"></button>
                </a>
            </div>
            @foreach ($gallery as $item)
                <!-- Card 1 -->
                <div class="col-span-2">
                    <a href="">
                        <img src="{{ asset('storage/' . $item->url) }}" class="rounded-full brightness-75" />
                    </a>
                    <p class="text-xs text-center -translate-y-6 text-black font-semibold sm:-translate-y-8 sm:text-base translate-x-3">
                        {{$item->nom}} </p>
                    <div class="">
                        <form action="{{ route('admin.gallery.delete', $item->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <a href="{{ route('admin.gallery.edit', $item->id) }}"
                                class="mb-2 md:mb-0 bg-white px-5 py-0 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                Edit
                            </a>
                            <button
                                class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-0 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
