<img 
   {{ $attributeString }}
   srcset="{{ $media->getSrcset($conversion) }}" 
   onload="if(!this.hasAttribute('data-sized')){this.setAttribute('sizes',Math.ceil(this.getBoundingClientRect().width)+'px');this.setAttribute('data-sized','')}"  
   sizes="1px" 
   src="{{ $media->getUrl($converions) }}"
>