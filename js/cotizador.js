! function () {
  "use strict";
  var E = document.getElementById("regalo");
  document.addEventListener("DOMContentLoaded", function () {
    var s = [],
      e = document.getElementById("nombre"),
      t = document.getElementById("apellido"),
      n = document.getElementById("email"),
      i = document.getElementById("pase_dia"),
      u = document.getElementById("pase_dosdias"),
      c = document.getElementById("pase_completo"),
      d = document.getElementById("calcular"),
      l = document.getElementById("error"),
      m = document.getElementById("btnRegistro"),
      p = document.getElementById("lista-productos"),
      y = document.getElementById("suma-total"),
      v = document.getElementById("etiquetas"),
      g = document.getElementById("camisa_evento");

    function a() {
      "" == this.value ? (l.style.display = "block", l.innerHTML = "este campo es obligatorio", this.style.border = "1px solid red", l.style.border = "1px solid red") : (l.style.display = "none", this.style.border = "1px solid #cccccc")
    }

    function o() {
      for (var e = parseInt(i.value) || 0, t = parseInt(u.value) || 0, n = parseInt(c.value) || 0, d = 0; d < s.length; d++) document.getElementById(s[d]).style.display = "none";
      for (s = [], 0 < e && s.push("viernes"), 0 < t && s.push("viernes", "sabado"), 0 < n && s.push("viernes", "sabado", "domingo"), d = 0; d < s.length; d++) document.getElementById(s[d]).style.display = "block";
      console.log(s)
    }
    m.disabled = !0, d.addEventListener("click", function (e) {
      if (e.preventDefault(), "" === E.value) alert("Debes elegir un regalo"), E.focus();
      else {
        var t = parseInt(i.value) || 0,
          n = parseInt(u.value) || 0,
          d = parseInt(c.value) || 0,
          s = parseInt(g.value) || 0,
          l = parseInt(v.value) || 0,
          a = 30 * t + 45 * n + 50 * d + 10 * s * .93 + 2 * l,
          o = [];
        0 < t && o.push(t + " Pases por dia"), 0 < n && o.push(n + " Pases por 2 dias"), 0 < d && o.push(d + " Pases completos"), 0 < s && o.push(s + " Camisas"), 0 < l && o.push(l + " Etiquetas"), p.style.display = "block", p.innerHTML = "";
        for (var r = 0; r < o.length; r++) p.innerHTML += o[r] + "<br/>";
        y.innerHTML = "$" + a.toFixed(2), m.disabled = !1, document.getElementById("total_pedido").value = a
      }
    }), i.addEventListener("blur", o), u.addEventListener("blur", o), c.addEventListener("blur", o), e.addEventListener("blur", a), t.addEventListener("blur", a), n.addEventListener("blur", a), n.addEventListener("blur", function () {
      -1 < this.value.indexOf("@") ? (l.style.display = "none", this.style.border = "1px solid #cccccc") : (l.style.display = "block", l.innerHTML = "debe tener al menos un @", this.style.border = "1px solid red", l.style.border = "1px solid red")
    }), 0 < document.getElementsByClassName("editar-registrado").length && (i.value || u.value || c.value) && o()
  })
}();
