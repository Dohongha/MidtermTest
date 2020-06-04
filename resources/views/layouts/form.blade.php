@csrf

<div>

    <label for="title">Title</label>

    <input type="text" id="title" name="title" value="{{ $thread->title }}"/>

</div>

<div>

    <label for="body">Body</label>

    <input type="text" id="body" name="body" value="{{ $thread->body }}"/>

</div>

