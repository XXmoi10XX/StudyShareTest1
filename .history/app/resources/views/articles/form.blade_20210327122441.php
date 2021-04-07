<form method="POST" action="{{ route('articles.store') }}">
    @csrf
    <div class="md-form">
        <label></label>
        <input type="text" name="title" class="form-control" placeholder="タイトル" 　required value="{{ old('title') }}">
        <input hidden type="nubmer" name="book_id" required value="{{$book['id']}}">

    </div>
    <div class="form-group">
        <label class="form-label">Chapter</label>
        <select class="custom-select  form-control " name="ch" required value="ch">
            <option value="" selected>Chapterを選択してください</option>
            @for ($num = 0 + 1; $num < 8 + 1; $num++) { <option>{{$num}}</option>
                }
                @endfor
        </select>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label></label>
            <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea>

        </div>