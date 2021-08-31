class BarraMenu extends HTMLElement {
  connectedCallback() {
    this.innerHTML = ` 
      <!--Llamada a css-->
      <link href="../css/css.css" type="text/css" rel="stylesheet">
      <ul>
      <li><a href="../html/main.html">Home</a></li>
      <li><a href="../php/read.php">Ver registros</a></li>
      <li><a href="../html/agregar.html">Ingresar nuevo</a></li>
      <li><a href="../html/eliminar.html">Eliminar</a></li>
    </ul>`;
  }
}

customElements.define("barra-menu", BarraMenu);
