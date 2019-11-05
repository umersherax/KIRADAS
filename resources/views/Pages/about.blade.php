@extends('layouts.app')

@section('content')
<div class="form-group">
  {!! Form::Label('category', 'Category:') !!}
  <select class="form-control input-sm" name="item_name">
    @foreach($items as $item)
       @if ($item->parent=="")
              <option value="{{$item->item_name}}">{{$item->name}}</option>
      @endif
    @endforeach
  </select>
</div>

<div class="form-group">
              {!! Form::Label('sub-category', 'Sub-Category:') !!}
              <select class="form-control input-sm" name="item_name">
                @foreach($items as $item)
                   @if ($item->parent!="")
                          <option value="{{$item->item_name}}">{{$item->name}}</option>
                          
                  @endif
                  
                @endforeach
              </select>
            </div>
            {{Form::close()}}
<script>
       
</script>
				


@endsection
