<x-app-layout>
<div class="container">
    <h1>Crear Reporte para {{ $student->nombre }}</h1>
    <form method="POST" action="{{ route('teachers_courses.reports.store', ['course' => $course->id, 'student' => $student->id]) }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Reporte</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            @error('nombre')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
            @error('fecha')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="item">Item</label>
            <select class="form-control" id="item" name="item" required>
            <option value="">Seleccione un item</option>
            <option value="A-P 1">A-P 1</option>
            <option value="A-P 2">A-P 2</option>
            <option value="A-P 3">A-P 3</option>
            <option value="A-P 4">A-P 4</option>
            <option value="A-P 5">A-P 5</option>
            <option value="A-P 6">A-P 6</option>
            <option value="S-D 1">S-D 1</option>
            <option value="S-D 2">S-D 2</option>
            <option value="S-D 3">S-D 3</option>
            <option value="S-D 4">S-D 4</option>
            <option value="S-D 5">S-D 5</option>
            <option value="S-D 6">S-D 6</option>
            <option value="S-D 7">S-D 7</option>
            <option value="S-D 8">S-D 8</option>
            </select>
            @error('item')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="area">Área</label>
            <input type="text" class="form-control" id="area" name="area" required>
            @error('area')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="trimestre">Trimestre</label>
            <select class="form-control" id="trimestre" name="trimestre" required>
            <option value="">Seleccione un trimestre</option>
            <option value="1ER">1ER</option>
            <option value="2DO">2DO</option>
            <option value="3ER">3ER</option>
            </select>
            @error('trimestre')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="detalle_observaciones">Detalle de Observaciones</label>
            <textarea class="form-control" id="detalle_observaciones" name="detalle_observaciones"></textarea>
            @error('detalle_observaciones')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

      
        
        <button type="submit" class="btn btn-primary">Guardar Reporte</button>
    </form>
</div>
</x-app-layout>

