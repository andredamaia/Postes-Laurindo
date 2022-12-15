import '../styles/index.scss'

import Load from './utils/load'
import Menu from './components/menu'

import './pages/home'
import './pages/kit-postes'
import './pages/paineis'
import './pages/caixas-de-passagens'
import './pages/caixas-de-medicao'
import './pages/muretas-de-agua'
import './pages/produtos'

new Load({ domElement: document.querySelector('.preload') })
new Menu({ domElement: document.querySelector('.menu') })