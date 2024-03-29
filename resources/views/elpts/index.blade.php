@extends('layouts.elpts')

@section('content')
	{{--@if (Session::has('success'))
  		<div class="alert alert-success">
    		{{ Session::get('success') }}
  		</div>
 	@endif--}}
	@if (count($doctypes) > 0)
		<ul class="nav nav-pills">
			@foreach ($doctypes->all() as $doctype)
				<li @if ($doctype->id == 1) class="active" @endif>
					<a data-toggle="tab" href="#doctype{{ $doctype->id }}">{{ $doctype->name }}</a>
				</li>
   			@endforeach
		</ul>
	@endif
	<div class="tab-content">
		@if (count($doctypes) > 0)
			@foreach ($doctypes->all() as $doctype)
				{{--@if ($doctype->id != 1)
					@continue
				@endif--}}

				<div id="doctype{{ $doctype->id }}" class="tab-pane @if ($doctype->id == 1) active @endif">
					<div style="display: flex;">
						<h3 style="margin: 0 auto 10px;">Электронные формы акцептов</h3>
					</div>
					@if (count($templates) > 0)
						<?php $i=0; ?>
						<ul style="padding-left: 15px;margin: 0 25%;">
						@foreach ($templates->all() as $template)
							@if ($template->doctypes_id != $doctype->id)
								@continue
							@endif
			  				<li>
								<a href="/{{ $template->id }}/create">{{ $template->name }}</a>
							</li>
							<?php $i++; ?>
				   		@endforeach
						</ul>
				   		@if (!$i)
				   			<div style="display: flex;">
								<span style="margin: 0 auto;">Нет документов для отображения</span>
				   			</div>
						@endif
					@endif
				</div>
   			@endforeach
		@endif
	</div>
@endsection
