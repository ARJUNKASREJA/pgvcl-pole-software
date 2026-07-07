<x-app-layout>

<div class="max-w-xl mx-auto p-6">

<h2 class="text-2xl font-bold mb-5">

Upload Survey Sheet

</h2>

<form method="POST"
      enctype="multipart/form-data"
      action="{{ route('survey.store',$project) }}">

@csrf

<div class="mb-4">

<label>Title</label>

<input
type="text"
name="title"
class="w-full border rounded p-2">

</div>

<div class="mb-4">

<label>Survey File</label>

<input
type="file"
name="file"
class="w-full border rounded p-2">

</div>

<button
class="bg-green-600 text-white px-5 py-2 rounded">

Upload

</button>

</form>

</div>

</x-app-layout>