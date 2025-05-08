import { useState } from "react";
import styled from "styled-components";
import { Link } from "react-router-dom";

// react-bootstrap
import Card from "react-bootstrap/Card";
import Modal from "react-bootstrap/Modal";
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

// Swiper
import { Swiper, SwiperSlide } from "swiper/react";
import { Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import CustomCalendar from "../components/CustomCalendar";
import CountButton from "../components/CountButton";
import InputTitle from "../components/InputTitle";
import BigButton from "../components/BigButton";

// img
import IconFilter from "../assets/img/icon_filter.png";
import DarkIconFilter from "../assets/img/dark_icon_filter.png";
import IconSort from "../assets/img/icon_sort.png";
import DarkIconSort from "../assets/img/dark_icon_sort.png";

import Profile1 from "../assets/img/icon_profile1.png";
import Profile2 from "../assets/img/icon_profile2.png";
import Profile3 from "../assets/img/icon_profile3.png";
import Profile4 from "../assets/img/icon_profile4.png";

import PlanThum1 from "../assets/img/plan_img1.jpg";
import PlanThum2 from "../assets/img/plan_img2.jpg";
import PlanThum3 from "../assets/img/plan_img3.jpg";
import PlanThum4 from "../assets/img/plan_img4.jpg";

// style
const PlanTitBox = styled.div`
  display: flex;
  justify-content: space-between;
  gap: 10px;
  margin-top: 30px;
  margin-bottom: 16px;
`;

const PlanTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const PlanSide = styled.div`
  display: flex;
  align-items: center;
  gap: 6px;
`;

const CardList = styled.div`
  margin-bottom: 50px;
`;

const FilterBtn = styled.div`
  background: url(${IconFilter}) no-repeat center / contain;
  width: 24px;
  aspect-ratio: 1 / 1;
  cursor: pointer;
  transition: var(--transition);

  .darkMode & {
    background-image: url(${DarkIconFilter});
  }
`;

const SortBtn = styled.div`
  background: url(${IconSort}) no-repeat center / contain;
  width: 24px;
  aspect-ratio: 1 / 1;
  cursor: pointer;
  transition: var(--transition);

  .darkMode & {
    background-image: url(${DarkIconSort});
  }
`;

const PlansList = () => {
  const [filterShow, setFilterShow] = useState(false);
  const [sortShow, setSortShow] = useState(false);

  const filterClose = () => setFilterShow(false);
  const filterOpen = () => setFilterShow(true);

  const sortClose = () => setSortShow(false);
  const sortOpen = () => setSortShow(true);

  return (
    <>
      {/* Header */}
      <Header type="title" title="Plans - Hong Kong" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <CustomCalendar />
          <PlanTitBox>
            <PlanTitle>Pick Your Plan (7 Available)</PlanTitle>
            <PlanSide>
              <FilterBtn onClick={filterOpen}></FilterBtn>
              <SortBtn onClick={sortOpen}></SortBtn>
            </PlanSide>
          </PlanTitBox>
          <CardList className="cardList2">
            <Card>
              <Link to="/" className="card_imgbox">
                <Swiper loop={true} speed="500" pagination={{ type: "fraction" }} modules={[Pagination]}>
                  <SwiperSlide>
                    <Card.Img src={PlanThum1} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                  <SwiperSlide>
                    <Card.Img src={PlanThum1} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                </Swiper>
              </Link>
              <Card.Body>
                <div className="card_top">
                  <Link to="/memberInfo" className="card_profile">
                    <img src={Profile1} />
                  </Link>
                  <div className="card_info">
                    <Card.Title>4 Day 3 Night Modern Family Packa...</Card.Title>
                    <Card.Text>GoGoHongKong</Card.Text>
                    <p className="card_price">USD $180/person</p>
                  </div>
                </div>
                <div className="card_bottom">
                  <CountButton type="like" count="0"></CountButton>
                  <CountButton type="chat" count="0"></CountButton>
                  <CountButton type="share" count="0"></CountButton>
                </div>
              </Card.Body>
            </Card>

            <Card>
              <Link to="/" className="card_imgbox">
                <Swiper loop={true} speed="500" pagination={{ type: "fraction" }} modules={[Pagination]}>
                  <SwiperSlide>
                    <Card.Img src={PlanThum2} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                  <SwiperSlide>
                    <Card.Img src={PlanThum2} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                </Swiper>
              </Link>
              <Card.Body>
                <div className="card_top">
                  <Link to="/memberInfo" className="card_profile">
                    <img src={Profile1} />
                  </Link>
                  <div className="card_info">
                    <Card.Title>Hong Kong Macau Bus Tour</Card.Title>
                    <Card.Text>GoGoHongKong</Card.Text>
                    <p className="card_price">USD $100/person</p>
                  </div>
                </div>
                <div className="card_bottom">
                  <CountButton type="like" count="999" active="active"></CountButton>
                  <CountButton type="chat" count="999" active="active"></CountButton>
                  <CountButton type="share" count="999" active="active"></CountButton>
                </div>
              </Card.Body>
            </Card>

            <Card>
              <Link to="/" className="card_imgbox">
                <Swiper loop={true} speed="500" pagination={{ type: "fraction" }} modules={[Pagination]}>
                  <SwiperSlide>
                    <Card.Img src={PlanThum3} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                  <SwiperSlide>
                    <Card.Img src={PlanThum3} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                </Swiper>
              </Link>
              <Card.Body>
                <div className="card_top">
                  <Link to="/memberInfo" className="card_profile">
                    <img src={Profile2} />
                  </Link>
                  <div className="card_info">
                    <Card.Title>Night Goblin Plan HK</Card.Title>
                    <Card.Text>GoMyPlan Limited</Card.Text>
                    <p className="card_price">USD $170/person</p>
                  </div>
                </div>
                <div className="card_bottom">
                  <CountButton type="like" count="0"></CountButton>
                  <CountButton type="chat" count="0"></CountButton>
                  <CountButton type="share" count="0"></CountButton>
                </div>
              </Card.Body>
            </Card>

            <Card>
              <Link to="/" className="card_imgbox">
                <Swiper loop={true} speed="500" pagination={{ type: "fraction" }} modules={[Pagination]}>
                  <SwiperSlide>
                    <Card.Img src={PlanThum4} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                  <SwiperSlide>
                    <Card.Img src={PlanThum4} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                </Swiper>
              </Link>
              <Card.Body>
                <div className="card_top">
                  <Link to="/memberInfo" className="card_profile">
                    <img src={Profile3} />
                  </Link>
                  <div className="card_info">
                    <Card.Title>Hong Kong Smart Plan (2 nights)</Card.Title>
                    <Card.Text>HK100Travel</Card.Text>
                    <p className="card_price">USD $50/person</p>
                  </div>
                </div>
                <div className="card_bottom">
                  <CountButton type="like" count="0"></CountButton>
                  <CountButton type="chat" count="0"></CountButton>
                  <CountButton type="share" count="0"></CountButton>
                </div>
              </Card.Body>
            </Card>

            <Card>
              <Link to="/" className="card_imgbox">
                <Swiper loop={true} speed="500" pagination={{ type: "fraction" }} modules={[Pagination]}>
                  <SwiperSlide>
                    <Card.Img src={PlanThum1} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                  <SwiperSlide>
                    <Card.Img src={PlanThum1} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                </Swiper>
              </Link>
              <Card.Body>
                <div className="card_top">
                  <Link to="/memberInfo" className="card_profile">
                    <img src={Profile3} />
                  </Link>
                  <div className="card_info">
                    <Card.Title>Hong Kong Smart Plan (2 nights)</Card.Title>
                    <Card.Text>HK100Travel</Card.Text>
                    <p className="card_price">USD $50/person</p>
                  </div>
                </div>
                <div className="card_bottom">
                  <CountButton type="like" count="0"></CountButton>
                  <CountButton type="chat" count="0"></CountButton>
                  <CountButton type="share" count="0"></CountButton>
                </div>
              </Card.Body>
            </Card>

            <Card>
              <Link to="/" className="card_imgbox">
                <Swiper loop={true} speed="500" pagination={{ type: "fraction" }} modules={[Pagination]}>
                  <SwiperSlide>
                    <Card.Img src={PlanThum2} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                  <SwiperSlide>
                    <Card.Img src={PlanThum2} />
                    <div className="card_img_tit">Hong Kong</div>
                  </SwiperSlide>
                </Swiper>
              </Link>
              <Card.Body>
                <div className="card_top">
                  <Link to="/memberInfo" className="card_profile">
                    <img src={Profile4} />
                  </Link>
                  <div className="card_info">
                    <Card.Title>Hong Kong Smart Plan (2 nights)</Card.Title>
                    <Card.Text>StreetHKSnapPhoto</Card.Text>
                    <p className="card_price">USD $80/person</p>
                  </div>
                </div>
                <div className="card_bottom">
                  <CountButton type="like" count="0"></CountButton>
                  <CountButton type="chat" count="0"></CountButton>
                  <CountButton type="share" count="0"></CountButton>
                </div>
              </Card.Body>
            </Card>
          </CardList>
        </PageContent>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />

      {/* Modal - filter */}
      <Modal show={filterShow} onHide={filterClose} className="type2" centered>
        <Modal.Header closeButton></Modal.Header>
        <Modal.Body>
          <Form className="formbox modal_ver">
            <Form.Group className="formitem">
              <InputTitle className="input_title">Select Plan Type:</InputTitle>
              <InputGroup>
                <Form.Check type="radio" name="filter1" id="filter1-1" label="“Same Day” Plan" />
                <Form.Check type="radio" name="filter1" id="filter1-2" label="“1 Night” Plan" />
                <Form.Check type="radio" name="filter1" id="filter1-3" label="“2 Nights” Plan" />
                <Form.Check type="radio" name="filter1" id="filter1-4" label="“3 Nights or More” Plan" />
              </InputGroup>
            </Form.Group>
            <Form.Group className="formitem">
              <InputTitle className="input_title">Select Lodging Type:</InputTitle>
              <InputGroup>
                <Form.Check type="radio" name="filter2" id="filter2-1" label="Included" />
                <Form.Check type="radio" name="filter2" id="filter2-2" label="Not Included" />
              </InputGroup>
            </Form.Group>
            <Form.Group className="formitem">
              <InputTitle className="input_title">Theme:</InputTitle>
              <InputGroup className="tab_ver">
                <Form.Check type="checkbox" name="filter3" id="filter3-1" label="Airport Pick Up" />
                <Form.Check type="checkbox" name="filter3" id="filter3-2" label="Private Itinerary" />
                <Form.Check type="checkbox" name="filter3" id="filter3-3" label="Snap Photo" />
                <Form.Check type="checkbox" name="filter3" id="filter3-4" label="Macau Day Trip" />
                <Form.Check type="checkbox" name="filter3" id="filter3-5" label="Private Car Rental" />
                <Form.Check type="checkbox" name="filter3" id="filter3-6" label="Accomodation" />
                <Form.Check type="checkbox" name="filter3" id="filter3-7" label="Send Off" />
                <Form.Check type="checkbox" name="filter3" id="filter3-8" label="Walking Tour" />
                <Form.Check type="checkbox" name="filter3" id="filter3-9" label="HK Night Tour" />
                <Form.Check type="checkbox" name="filter3" id="filter3-10" label="HK History/Culture" />
              </InputGroup>
            </Form.Group>
          </Form>
        </Modal.Body>
        <Modal.Footer>
          <BigButton onClick={filterClose}>Confirm</BigButton>
        </Modal.Footer>
      </Modal>

      {/* Modal - sort */}
      <Modal show={sortShow} onHide={sortClose} className="type2" centered>
        <Modal.Header closeButton></Modal.Header>
        <Modal.Body>
          <Form className="formbox modal_ver">
            <Form.Group className="formitem">
              <InputTitle className="input_title">Sort by your preferred order:</InputTitle>
              <InputGroup>
                <Form.Check type="radio" name="sort" id="sort-1" label="Newest" />
                <Form.Check type="radio" name="sort" id="sort-2" label="Popularity" />
                <Form.Check type="radio" name="sort" id="sort-3" label="Lowest price" />
                <Form.Check type="radio" name="sort" id="sort-4" label="Highest price" />
              </InputGroup>
            </Form.Group>
          </Form>
        </Modal.Body>
        <Modal.Footer>
          <BigButton onClick={sortClose}>Confirm</BigButton>
        </Modal.Footer>
      </Modal>
    </>
  );
};

export default PlansList;
