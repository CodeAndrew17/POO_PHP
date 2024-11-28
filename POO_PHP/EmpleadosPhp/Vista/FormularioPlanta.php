<?php
class FormularioPlanta
{
    public function mostrar()
    {
        $html = <<<EOT
        <div class="container-fluid well">
            <div class="row clearfix">
                <form role="form" class="form-horizontal"
                    action="../Controlador/LiquidarEmpleado.php">
                    <div class="form-group">
                        <label class="col-sm-3
                        control-label">Identificacion</label>
                        <div class="col-sm-6">
                            <input type="hidden" name="tipo_empleado"
                            value="1">
                            <input type="text" class="form-control"
                            name="identificacion"
                            id="identificacion"
                            placeholder="Identificacion...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3
                        control-label">Nombre</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control"
                            name="nombre" id="nombre"
                            placeholder="Nombre...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3
                        control-label">Cargo</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control"
                            name="cargo" id="cargo"
                            placeholder="Cargo...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sueldo básico</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control"
                            name="sueldo_basico" id="sueldo_basico"
                            placeholder="Sueldo básico...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Valor
                        extras</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control"

                            name="valor_extras"
                            id="horas_extras" placeholder="valor extras...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Deducciones</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control"
                            name="deducciones"
                            id="deducciones" placeholder="Deducciones...">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-3">
                        <input type="submit" class="btn btn-info"
                        value="Procesar">
                    </div>
                </form>
            </div>
        </div>
    EOT;
        echo $html;
    }
}
