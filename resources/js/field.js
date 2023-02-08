import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-time', IndexField)
  app.component('detail-time', DetailField)
  app.component('form-time', FormField)
})
