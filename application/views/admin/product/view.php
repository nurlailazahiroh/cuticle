   <!-- BEGIN: Content -->
   <div class="content">
       <h2 class="intro-y text-lg font-medium mt-10">
           Product List
       </h2>
       <div class="grid grid-cols-12 gap-6 mt-5">
           <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
               <div class="flex w-full sm:w-auto">
                   <div class="w-48 relative text-slate-500">
                       <input type="text" class="form-control w-48 box pr-10" placeholder="Search by name...">
                       <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                   </div>
                   <select class="w-48 xl:w-auto form-select box ml-2">
                       <option>Status</option>
                       <option>Active</option>
                       <option>Removed</option>
                   </select>
               </div>
               <div class="hidden xl:block mx-auto text-slate-500"></div>
               <div class="w-full xl:w-auto flex flex-wrap xl:flex-nowrap items-center gap-y-3 mt-3 xl:mt-0">
                   <a href="<?= site_url('admin/product/add') ?>" class="btn btn-primary shadow-md mr-2"> <i data-lucide="plus" class="w-4 h-4"></i></a>

               </div>
           </div>
           <!-- BEGIN: Data List -->
           <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
               <table class="table table-report -mt-2">
                   <thead>
                       <tr>
                           <th class="whitespace-nowrap">
                               <input class="form-check-input" type="checkbox">
                           </th>
                           <th class="whitespace-nowrap">IMAGES</th>
                           <th class="whitespace-nowrap">PRODUCT NAME</th>
                           <th class="whitespace-nowrap">STOCK</th>
                           <th class="text-center whitespace-nowrap">PRICE</th>
                           <th class="text-center whitespace-nowrap">STATUS</th>
                           <th class="text-center whitespace-nowrap">ACTIONS</th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php foreach ($product as $row) : ?>
                           <tr class="intro-x">
                               <td class="w-10">
                                   <input class="form-check-input" type="checkbox">
                               </td>
                               <td class="!py-4">
                                   <div class="flex items-center">
                                       <div class="w-10 h-10 image-fit zoom-in">
                                           <img alt="Midone - HTML Admin Template" class="rounded-lg border-1 border-white shadow-md tooltip" src="<?= base_url() . '/uploads/' . $row->gambar ?>">
                                       </div>
                                       <a href="" class="font-medium whitespace-nowrap ml-4"><?= $row->kategori ?></a>
                                   </div>
                               </td>
                               <td class="whitespace-nowrap"> <a class="flex items-center underline decoration-dotted" href="javascript:;"><?= $row->nama_brg ?></a> </td>
                               <td class="text-center">
                                   <div class="flex items-center">
                                       <div class="text-xs text-slate-500 ml-1">( <?= $row->stok ?> ) </div>
                                   </div>
                               </td>
                               <td class="text-center whitespace-nowrap">Rp. <?= number_format($row->harga, 0, ',', '.') ?></td>
                               <td class="w-40">
                                   <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                               </td>
                               <td class="table-report__action w-56">
                                   <div class="flex justify-center items-center">
                                       <a class="flex items-center mr-3" href="<?= site_url('admin/product/update/' . $row->id_brg) ?>"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                       <a class="flex items-center text-danger" href="<?= site_url('admin/product/delete/' . $row->id_brg) ?>" onclick="return confirm('Yakin Hapus')"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                   </div>
                               </td>
                           </tr>
                       <?php endforeach; ?>
                   </tbody>
               </table>
           </div>