<!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div
                class="modal fade"
                id="reviewModal_{{$post->id}}"
                tabindex="-1"
                
                aria-labelledby="reviewModal_{{$post->id}}"
                aria-hidden="true"
            >
                <div
                    class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                    role="document"
                >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" style="color:#F12A57" id="modalTitleId">
                                Review
                            </h4>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <h5>Please review about <span class="text-decoration-underline text-primary">{{$post->title}}</span></h5>
                            <form action="{{route('review.store')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="hidden" name="post_id" value="{{$post->id}}">
                                        <label for="rate" class="form-label">Rate</label>
                                        <select name="rate" id="rate" class="form-control" required>
                                            <option value=""></option>
                                            <option value="1">1. Worst</option>
                                            <option value="2">2. Bad</option>
                                            <option value="3">3. Normal</option>
                                            <option value="4">4. Good</option>
                                            <option value="5">5. Best</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="comment" class="form-label">Comment</label>
                                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10" placeholder="Please write your comment" required></textarea>
                                    </div>
                                </div>
                                
                                
                                <button type="submit" class="btn text-white fw-bold fs-5 w-100" style="background-color:#F12A57">Post</button>
                            </form>
                            
                        
                            
                        </div>
                    </div>
                </div>
            </div>