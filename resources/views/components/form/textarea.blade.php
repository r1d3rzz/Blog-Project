@props(['name'])

<textarea name="{{$name}}" id="{{$name}}" class="form-control" cols="30" rows="5"
    placeholder="leave Your Comments...">{{old($name)}}</textarea>
<x-error name="{{$name}}" />
