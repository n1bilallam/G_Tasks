
<div class="bg-white  p-4 rounded-lg shadow flex flex-col mt-3 ">
                    <h3 class=" font-normal text-xl py-3 -ml-6 mb-3 border-l-4 border-indigo-400 pl-4">
                        Invite a user
                    </h3>
                    
                    
                        <form method="POST" action=" {{ $project->path(). '/invitations' }}" class="text-right">
                            
                            @csrf
                            <div class="mb-3">
                                <input type="email" name="email" class="border border-gray-500 rounded w-full py-2 px-3" placeholder="Email address">
                            </div>
                            <button type="submit" class="btn text-green-500">Invite</button>
                        </form>
                        @include('errors',[ 'bag'=>'invitations'])
 </div>