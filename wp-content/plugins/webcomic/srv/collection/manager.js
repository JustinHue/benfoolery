!function(){"use strict";!function t(){if("loading"===document.readyState)return document.addEventListener("DOMContentLoaded",t);for(var e=document.querySelectorAll("[data-webcomic-media-manager]"),a=0;a<e.length;a++)n(e[a],document.querySelector('[name="'+e[a].getAttribute("data-input")+'"]').value.split(","),Boolean(e[a].getAttribute("data-webcomic-media-manager")));function n(t,e,a){var i=document.querySelector('[name="'+t.getAttribute("data-input")+'"]'),r=new FormData,o=new XMLHttpRequest,c=i.value.split(",");i.value=e.toString(),c.toString()!==e.toString()&&i.dispatchEvent(new Event("change",{bubbles:!0})),r.append("action","webcomic_update_media_manager"),r.append("media",e),o.onreadystatechange=function(){4===o.readyState&&(e=e.map(function(t){return parseInt(t)}),function(t,e,a,i){t.innerHTML="";for(var r=0;r<i.length;r++)t.innerHTML+=(o=i[r].id,c=i[r].media,'\n\t\t\t<div data-id="'+o+'">\n\t\t\t\t'+c+'\n\t\t\t\t<a class="dashicons dashicons-no" style="cursor:pointer">\n\t\t\t\t\t<span class="screen-reader-text">'+webcomicMediaManagerL10n.remove+"</span>\n\t\t\t\t</a>\n\t\t\t</div>");var o,c;t.innerHTML+=(s=i,l=a,m="dashicons-format-image",p=webcomicMediaManagerL10n.add,g="",l&&(m="dashicons-images-alt2"),s.length&&(p=webcomicMediaManagerL10n.change),g='\n\t\t\t<p>\n\t\t\t\t<button type="button" class="button button-large">\n\t\t\t\t\t<span class="dashicons '+m+'"></span> '+p+"\n\t\t\t\t</button>\n\t\t\t</p>",1<s.length&&l&&(g+='<p class="description">'+webcomicMediaManagerL10n.drag+"</p>"),g),a&&(d=t,u=a,jQuery(d).sortable({items:"div",start:function(t,e){e.placeholder.height(e.helper.outerHeight())},stop:function(){n(d,jQuery(d).sortable("toArray",{attribute:"data-id"}),u)}}));var d,u;var s,l,m,p,g;t.querySelector("button").addEventListener("click",function(){var e,i;e=t,i=a,wp.media.frames.webcomicMedia=wp.media({title:webcomicMediaManagerL10n.title,button:{text:webcomicMediaManagerL10n.update},library:{type:"image"},multiple:i}).on("select",function(){for(var t=[],a=wp.media.frames.webcomicMedia.state().get("selection"),r=0;r<a.length;r++)t.push(a.models[r].id);n(e,t,i)}).open()});for(var b=t.querySelectorAll("a"),f=function(i){b[i].addEventListener("click",function(r){r.preventDefault();var o=e.indexOf(Number(b[i].parentNode.getAttribute("data-id")));e.splice(o,1),n(t,e,a)})},v=0;v<b.length;v++)f(v)}(t,e,a,JSON.parse(o.responseText)))},o.open("POST",ajaxurl),o.send(r)}jQuery(document).on("widget-added widget-updated",function(t,e){if(e[0].id.match(/_mgsisk_webcomic_/))for(var a=e[0].querySelectorAll("[data-webcomic-media-manager]"),i=0;i<a.length;i++)n(a[i],document.querySelector('[name="'+a[i].getAttribute("data-input")+'"]').value.split(","),Boolean(a[i].getAttribute("data-webcomic-media-manager")))})}()}();