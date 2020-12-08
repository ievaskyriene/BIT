"use strict";

import Api from './api';

class Menu {

  constructor(target) {
    this.target = target;
    this.read = true;
    this.init();
    this.index = 0;
  }

  init() {
    const DOM = document.getElementById(this.target);

    if (DOM) {
      const draggables = document.querySelectorAll('.draggable')
      const container = document.querySelector('.container')
      const add = document.querySelector(".addNew");
      this.save();
      this.delete(draggables);

      var newBlock = () => {
        this.addNew();
        add.removeEventListener("click", newBlock);
      }
      add.addEventListener("click", newBlock);

      draggables.forEach(draggable => {
        draggable.addEventListener('dragstart', () => {
          draggable.classList.add('dragging')
        })

        draggable.addEventListener('dragend', () => {
          draggable.classList.remove('dragging')
        })
      })

      // containers.forEach(container => {
      container.addEventListener('dragover', e => {
        e.preventDefault()
        const afterElement = getDragAfterElement(container, e.clientY)
        const draggable = document.querySelector('.dragging')
        if (afterElement == null) {
          container.appendChild(draggable)
        } else {
          container.insertBefore(draggable, afterElement)
        }
      })
      // })

      function getDragAfterElement(container, y) {
        const draggableElements = [...container.querySelectorAll('.draggable:not(.dragging)')]

        return draggableElements.reduce((closest, child) => {
          const box = child.getBoundingClientRect()
          const offset = y - box.top - box.height / 2
          if (offset < 0 && offset > closest.offset) {
            return { offset: offset, element: child }
          } else {
            return closest
          }
        }, { offset: Number.NEGATIVE_INFINITY }).element
      }
    }
  }

  addNew() {

    const lastElemet = document.querySelector(".container");

    const HTML = `<div class="menuDiv">
    <label for="">
        kazkas4
    </label>
    <input name="menu" class="menuText" type="text">
    </div>


    <div class="menuSelect">
        <label for="standard-select">Standard Select</label>


        <select class="select-css" id="standard-select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div>
        <label for="">
            kazkas2
        </label>
        <input class="menuLink" type="text">
    </div>

    <div class="manuDelete">
        <svg height="35" version="1.1" viewBox="0 0 295 295" width="40">
            <title />
            <desc />
            <defs />
            <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                <g fill-rule="nonzero" id="close">
                    <path d="M147.421,0 C66.133,0 0,66.133 0,147.421 C0,228.709 66.133,294.842 147.421,294.842 C185.708,294.842 221.988,280.233 249.58,253.706 C251.969,251.41 252.044,247.611 249.747,245.223 C247.452,242.835 243.654,242.759 241.264,245.056 C215.919,269.423 182.592,282.842 147.422,282.842 C72.75,282.843 12,222.093 12,147.421 C12,72.749 72.75,12 147.421,12 C222.092,12 282.842,72.75 282.842,147.421 C282.842,164.263 279.79,180.694 273.771,196.256 C272.576,199.347 274.112,202.821 277.203,204.017 C280.295,205.21 283.768,203.676 284.964,200.585 C291.519,183.636 294.843,165.749 294.843,147.42 C294.843,66.133 228.71,0 147.421,0 Z" fill="#000000" id="Shape" />
                    <path d="M167.619,160.134 C165.249,157.815 161.451,157.857 159.134,160.224 C156.816,162.592 156.857,166.391 159.224,168.709 L206.46,214.945 C207.628,216.088 209.143,216.657 210.657,216.657 C212.214,216.657 213.77,216.054 214.945,214.854 C217.263,212.486 217.222,208.687 214.855,206.369 L167.619,160.134 Z" fill="#FB4A5E" id="Shape" />
                    <path d="M125.178,133.663 C126.349,134.834 127.885,135.42 129.421,135.42 C130.957,135.42 132.492,134.834 133.664,133.663 C136.007,131.32 136.007,127.521 133.664,125.178 L88.428,79.942 C86.085,77.599 82.285,77.599 79.943,79.942 C77.6,82.285 77.6,86.084 79.943,88.427 L125.178,133.663 Z" fill="#FB4A5E" id="Shape" />
                    <path d="M214.9,79.942 C212.557,77.599 208.757,77.599 206.415,79.942 L79.942,206.415 C77.599,208.758 77.599,212.557 79.942,214.9 C81.113,216.071 82.649,216.657 84.185,216.657 C85.721,216.657 87.256,216.071 88.428,214.9 L214.9,88.428 C217.243,86.084 217.243,82.286 214.9,79.942 Z" fill="#FB4A5E" id="Shape" />
                </g>
            </g>
        </svg>
    </div>
    <div class="menuDrag">
        <svg data-name="Layer 1" id="Layer_1" height="35" width="40" viewBox="0 0 32 32">
            <defs>
                <style>
                    .cls-1 {
                        fill: #515151;
                    }
                </style>
            </defs>
            <title />
            <path class="cls-1" d="M16,9a3,3,0,1,0-3-3A3,3,0,0,0,16,9Zm0-4.46A1.46,1.46,0,1,1,14.54,6,1.46,1.46,0,0,1,16,4.54Z" />
            <path class="cls-1" d="M16,19a3,3,0,1,0-3-3A3,3,0,0,0,16,19Zm0-4.46A1.46,1.46,0,1,1,14.54,16,1.46,1.46,0,0,1,16,14.54Z" />
            <path class="cls-1" d="M16,29a3,3,0,1,0-3-3A3,3,0,0,0,16,29Zm0-4.46A1.46,1.46,0,1,1,14.54,26,1.46,1.46,0,0,1,16,24.54Z" />
        </svg>
    </div> 
    </div>`;

    let node = document.createElement("div");
    node.classList.add("draggable");
    node.setAttribute('id', "addDrag");
    node.setAttribute('draggable', true);
    node.innerHTML = HTML;
    lastElemet.appendChild(node)
    this.init();
  }

  delete(draggables) {
    var deleted = document.querySelectorAll(".manuDelete");

    for (let i = 0; i < draggables.length; i++) {
      deleted[i].addEventListener("click", () => {
        draggables[i].remove();
      })
    }
  }

  save() {
    const store = document.querySelector(".save");
    const api = "menu-store";

    if (this.read) {
      var data = () => {
        const menuText = document.getElementsByName("menu");
        const menuLink = document.querySelectorAll(".menuLink");
        var selectBox = document.getElementsByTagName("select");

        var text = [];
        var link = [];
        var values = [];;

        for (this.index = 0; this.index < selectBox.length; this.index++) {
          var options = selectBox[this.index].getElementsByTagName('option');
          for (var i = options.length; i--;) {
            if (options[i].selected) values.push(options[i].value)
            // if (options[i].selected) text = (options[i].innerText)
          }
          text.push(menuText[this.index].value)
          link.push(menuLink[this.index].value)
        }

        var axios = new Api();

        var obj = {
          category: values,
          various: link,
          content: text,
          api: api
        }
        axios.formDataApi(obj);
      }
      store.addEventListener("click", data);
    }
    this.read = false;
  }
}


export default Menu;