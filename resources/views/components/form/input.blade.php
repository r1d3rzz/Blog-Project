@props(['name','type'=>'text'])

<div class="my-3">
    <x-form.label :name="$name" />
    <input value="{{old($name)}}" type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control my-1">
    <x-error name="{{$name}}" />
</div>
