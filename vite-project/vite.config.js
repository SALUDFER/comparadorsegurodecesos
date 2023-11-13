import htmlPurge from 'vite-plugin-purgecss'
import { createHtmlPlugin } from 'vite-plugin-html'
import { resolve} from 'path'
import { defineConfig } from 'vite'

const root = resolve(__dirname, 'src')
const outDir = resolve(__dirname,'dist')

export default defineConfig({
    root,
    plugins:[
        htmlPurge(),
        createHtmlPlugin({
            minify:true,
            removeComments:true,
            collapseWhitespace:true,
        })
    ],
    build:{
        outDir,
        emptyOutDir:true,
        rollupOptions:{
            input:{
                main:resolve(root,'index.php'),
                avisolegal:resolve(root,'aviso-legal.php'),
                mapaweb:resolve(root,'mapa-web.php'),
                comparadorcompania:resolve(root,'comparador-compania.php'),
                contacto:resolve(root,'contacto.php'),
                contrataciononline2:resolve(root,'contratacion-online-2.php'),
                contrataciononline:resolve(root,'contratacion-online.php'),
                error404:resolve(root,'error-404.php'),
                informacionproductodecesos:resolve(root,'informacion-producto-decesos.php'),
                mostrartarificaciondeceso:resolve(root,'mostrar-tarificacion-deceso.php'),
                paginadeagradecimiento:resolve(root,'pagina-de-agradecimiento.php'),
                politicacookies:resolve(root,'politica-cookies.php'),
                precios:resolve(root,'precios.php'),
                protecciondedatos:resolve(root,'proteccion-de-datos.php'),
                solicitud:resolve(root,'solicitud.php'),
                segurodecesosAdeslas:resolve(root,'seguro-decesos/adeslas-decesos.php'),
                segurodecesosAdeslasPrimaunica:resolve(root,'seguro-decesos/adeslas-decesos/prima-unica.php'),
                segurodecesosAllianz:resolve(root,'seguro-decesos/allianz-decesos.php'),
                segurodecesosAsisa:resolve(root,'seguro-decesos/asisa-decesos.php'),
                segurodecesosAxa:resolve(root,'seguro-decesos/axa-decesos.php'),
                segurodecesosCaser:resolve(root,'seguro-decesos/caser-decesos.php'),
                segurodecesosCaserPrimaunica:resolve(root,'seguro-decesos/caser-decesos/prima-unica.php'),
                segurodecesosDivina:resolve(root,'seguro-decesos/divina-pastora-decesos.php'),
                segurodecesosDkv:resolve(root,'seguro-decesos/dkv-decesos.php'),
                segurodecesosEuropea:resolve(root,'seguro-decesos/europea-decesos.php'),
                segurodecesosFiatc:resolve(root,'seguro-decesos/fiatc-decesos.php'),
                segurodecesosGenerali:resolve(root,'seguro-decesos/generali-decesos.php'),
                segurodecesosGeneraliPrimaunica:resolve(root,'seguro-decesos/generali-decesos/prima-unica.php'),
                segurodecesosHelvetia:resolve(root,'seguro-decesos/helvetia-decesos.php'),
                segurodecesosHelvetiaPrimanivelada:resolve(root,'seguro-decesos/helvetia-decesos/prima-nivelada.php'),
                segurodecesoslaFe:resolve(root,'seguro-decesos/la-fe-decesos.php'),
                segurodecesosMapfre:resolve(root,'seguro-decesos/mapfre-decesos.php'),
                segurodecesosMapfrePrimaunica:resolve(root,'seguro-decesos/mapfre-decesos/prima-unica.php'),
                segurodecesosNortehispana:resolve(root,'seguro-decesos/nortehispana-decesos.php'),
                segurodecesosOcaso:resolve(root,'seguro-decesos/ocaso-decesos.php'),
                segurodecesosOcasoPrimaunica:resolve(root,'seguro-decesos/ocaso-decesos/prima-unica.php'),
                segurodecesosPreventiva:resolve(root,'seguro-decesos/preventiva-decesos.php'),
                segurodecesosReale:resolve(root,'seguro-decesos/reale-decesos.php'),
                segurodecesosSanitas:resolve(root,'seguro-decesos/sanitas-decesos.php'),
                


                
            }
        }
    }


});
