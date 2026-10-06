# Propuesta: video en la página de inicio

Rama de trabajo: `codex/video-presentacion`.

## Objetivo

Dar protagonismo al video proporcionado y facilitar que el visitante solicite una cotización después de verlo.

## Ubicación y diseño

Agregar una sección después del carrusel y antes del título «Venta, Fabricación e Instalación». Esta ubicación permite encontrar el video al inicio y mantiene la galería de productos a continuación.

En escritorio, mostrar el reproductor a la izquierda y un bloque breve de texto con el botón de cotización a la derecha. En móvil, colocar primero el título, la descripción y el botón de cotización, después el reproductor. Usar el color turquesa y la tipografía del sitio actual.

Texto implementado después de revisar fotogramas del clip:

- Título: **Conoce Malla Construcciones**.
- Descripción: **Mira cómo trabajamos en la instalación de mallas y soluciones metálicas. Cuéntanos qué necesitas y solicita tu cotización.**
- Botón: **Cotizar por WhatsApp**.
- Destino: número existente del sitio, `+502 4273-4205`, con mensaje «Hola, vi el video en su página y deseo solicitar una cotización».

No usar el video como fondo ni incluirlo como diapositiva del carrusel: requiere controles accesibles y tiempo suficiente para verlo completo.

## Reproducción

- Reproductor HTML nativo con controles y reproducción dentro de la página en móvil (`controls`, `playsinline`).
- Inicio manual, sin reproducción automática ni bucle. El visitante controla el sonido.
- Proporción 16:9, ancho adaptable y sin recortar la imagen.
- Portada con un fotograma representativo del video, seleccionado tras revisar su contenido.
- Carga diferida del archivo: mostrar la portada inicialmente y cargar el video al solicitar su reproducción (`preload="none"`).
- Enlace alternativo para abrir el video si el navegador no puede reproducirlo.
- Si contiene información hablada relevante, preparar subtítulos en español como pista WebVTT.

## Archivo proporcionado y preparación

Archivo: `WhatsApp Video 2026-09-25 at 9.44.01 AM.mp4`.

Características obtenidas de los metadatos de Windows:

| Característica | Valor |
| --- | --- |
| Duración | Aproximadamente 45 segundos |
| Resolución | 1920 × 1080 |
| Proporción | 16:9 |
| Fotogramas por segundo | Aproximadamente 59.94 |
| Tamaño | 69,157,699 bytes, aproximadamente 66 MiB |

Se revisaron seis fotogramas distribuidos a lo largo del clip: muestran trabajo de instalación, soldadura y malla instalada. La portada corresponde al segundo 27. El audio se conserva y se verificó su decodificación, pero no se ha transcrito ni evaluado la necesidad de subtítulos.

Se generó una copia para web manteniendo el original intacto: MP4 con H.264, audio AAC, metadatos al inicio (`faststart`), 1280 × 720 y 30 fps. El archivo final pesa 16,940,806 bytes (16.16 MiB), aproximadamente un 75.5 % menos que el original. Se priorizó conservar detalle en las mallas frente al objetivo inicial de 8–15 MB.

## Archivos de la integración

- `application/views/public/home.php`: sección del video, texto y botón de cotización.
- `ui/public/css/public.css`: distribución adaptable y estilos de la sección.
- `ui/public/videos/malla-presentacion.mp4`: copia optimizada del video.
- `ui/public/images/video-presentacion.webp`: portada seleccionada del clip.
- Opcional: archivo `.vtt` para subtítulos si el audio lo requiere.

No hacen falta cambios en controladores, base de datos ni dependencias de Composer para incorporar esta sección.

## Validación antes de publicar

Comprobar reproducción y sonido en móvil y escritorio, controles con teclado, imagen completa sin recortes, funcionamiento del enlace de WhatsApp y que el MP4 no se descargue al abrir la página. Confirmar que el servidor entregue `video/mp4` y permita solicitudes de rango para adelantar o retroceder.

## Estado

La sección está integrada después del carrusel en la rama `codex/video-presentacion`, con reproducción manual, controles nativos, portada, enlace alternativo y botón de WhatsApp. La copia optimizada y la portada están incluidas en el proyecto. Se comprobó la sintaxis PHP y la decodificación completa del video y audio.

La aplicación completa no arranca localmente porque este checkout no tiene instaladas las dependencias de Composer (League Plates). Se verificó la sección real de la plantilla en una vista previa independiente a 1280 px y 390 px: la portada carga, se mantiene la proporción 16:9 y el video no desborda el ancho. La reproducción completa y el audio en navegadores siguen pendientes. El cambio previo del usuario en `application/views/public/public_master.php` se conserva.

### Corrección tras revisar las capturas

Se añadió una versión al enlace de `public.css` basada en la fecha de modificación del archivo, para que el navegador recargue los estilos cuando cambien. El reproductor usa además un contenedor Bootstrap `ratio-16x9` y clases de ancho y alto adaptable, con `object-fit: contain` para evitar recortes.

Al comprobar la página publicada, el CSS disponible aplicaba dimensiones correctas, pero la portada `/ui/public/images/video-presentacion.webp` devolvía 404. Para completar la actualización del servidor deben subirse las plantillas modificadas, `ui/public/css/public.css` y la portada. El MP4 está accesible en la URL publicada; conservar la copia optimizada de esta rama como archivo de despliegue.
