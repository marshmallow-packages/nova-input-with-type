import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-input-with-type', IndexField)
  app.component('detail-input-with-type', DetailField)
  app.component('form-input-with-type', FormField)
})
