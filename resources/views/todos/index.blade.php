@extends('layouts.index')

@section('content')
    <h1 class="title is-size-1 is-block">Todo List</h1>

    <ul class="my-6">
        @foreach ($items as $item)
            <li class="level">
                <div class="level-left">
                    <div class="level-item">
                        <span class="tag">Item:</span>
                        <span class="mx-4">{{ $item->name }}</span>
                    </div>
                </div>

                <div class="level-right">
                    <div class="level-tiem">
                        <form method="post" action="{{ route('mark', ['id' => $item->id]) }}">
                            {{ csrf_field() }}
                            <button
                            class="button is-danger is-outlined is-small"
                            type="submit"
                            >
                                Mark as completed
                            </button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    <form method="post" action="{{ route('saveTodo') }}" class="mt-3">
        {{ csrf_field() }}

        <div class="field is-grouped">
          <div class="control is-expanded">
            <input
            class="input"
            id="item"
            name="item"
            type="text"
            placeholder="Todo item ..."
            >
          </div>
          <div class="control">
            <button class="button is-success" type="submit">Save</button>
          </div>
        </div>
    </form>
@endsection
